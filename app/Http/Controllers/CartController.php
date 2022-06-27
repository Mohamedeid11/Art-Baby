<?php

namespace App\Http\Controllers;

use App\Http\Requests\CartRequest;
use App\Mail\OrderSummary;
use App\Models\Address;
use App\Models\Coupon;
use App\Models\Order;
use App\Models\PaymentMethods;
use App\Models\Product;
use App\Models\SizeProducts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index()
    {
        session()->forget('coupon');
        session()->forget('coupon_type');
        session()->put('cash',true);

        session()->get('key') ? '' : session()->put('key',1) ;
        $Product_ids = [];
        $cart = session()->get('cart');
        if ($cart != null) {
            foreach ($cart as $key =>  $item) {
                $SizeProductQuantity = SizeProducts::where('product_id',$item['product_id'])->where('size_id', $item['size_id'])->value('quantity');
                if(  $item['quantity']  <= $SizeProductQuantity  ){
                    $Product_ids[] = $item['product_id'];
                }else{
                    unset($cart[$key]);
                    session()->put('cart', $cart);
                    session()->save();
                }
            }
        }
        $Products = Product::select('id', 'quantity')->wherein('id', $Product_ids)->get();

        $FeaturedProducts = Product::with('images')->where('display', 1)->where('featured', 1)->get();
        $featuredProducts = $FeaturedProducts->chunk(3);
        $featuredProductsSm = $FeaturedProducts;

        return view('website.cart.index', compact(['Products', 'featuredProducts', 'featuredProductsSm']));
    }

    public function store(CartRequest $request)
    {
        $product = Product::find($request->get('product_id'));
        $cartProducts = session()->get('cart');

        if (session()->get('cart')) {
            $cartid = session()->get('cart')[count(session()->get('cart')) - 1 ]['cart_id'];
        }else{
            $cartid = 0;
        }
        $exist = false;
        if (setting('accept_order') != 1) {
            return redirect()->back()->with('warning', __('messages.websiteDontAcceptOrder'));
        }
        if (!empty($cartProducts)) {
            foreach ($cartProducts as $key => $cartProduct) {
                $SizeProductQuantity = SizeProducts::where('product_id',$request->get('product_id'))->where('size_id', $cartProduct['size_id'])->value('quantity');
                if ( $cartProduct['product_id'] == $request->get('product_id') && $cartProduct['size_id'] == $request->get('size') && $cartProduct['color_id'] == $request->get('color') ){
                    if(  ($cartProducts[$key]['quantity'] + $request->get('quantity')) < $SizeProductQuantity  ){
                        $cartProducts[$key]['quantity'] = ($cartProducts[$key]['quantity'] + $request->get('quantity'));
                    }else{
                        $err = __('website.quantityOf') . '(' . $product['name_' . app()->getLocale()] . ')' . __('website.not_enough');
                        return redirect()->back()->with('warning', $err);
                    }
                    $exist = true;
                    $cartProducts[$key]['cart_id'] = $cartid++;
                    $cartProducts[$key]['size_id'] = $request->get('size');
                    $cartProducts[$key]['color_id'] = $request->get('color');
                    session()->put('cart', $cartProducts);
                }
            }

            if (!$exist) {
                if ($product['deliverable'] != 1 && !userInbahrain()) {
                    return redirect()->back()->with('warning', __('messages.productNotDeliverable'));
                }
                session()->push('cart', [
                    'cart_id' => $cartid++,
                    'product_id' => $request->get('product_id'),
                    'quantity' => $request->get('quantity'),
                    'size_id' => $request->get('size'),
                    'color_id' => $request->get('color'),
                ]);
            }
        } else {
            if ($product['deliverable'] != 1  && !userInbahrain()) {
                return redirect()->back()->with('warning', __('messages.productNotDeliverable'));
            }
            session()->push('cart', [
                'cart_id' => 1,
                'product_id' => $request->get('product_id'),
                'quantity' => $request->get('quantity'),
                'size_id' => $request->get('size'),
                'color_id' => $request->get('color'),
            ]);
        }
        return redirect()->back()->with('message', __('messages.addedCart'));
    }

    public function save(Request $request)
    {

        $id = $request->get('product_id');
        $quantity = $request->get('quantity');
        $cart_id = $request->get('cart_id');
        $cart = session()->get('cart');
        $product = Product::find($id);

        if ($product && $product->quantity >= $quantity) {
            foreach ($cart as $key => $item) {
                if ($item['product_id'] == $id && $key == $cart_id) {
                    $cart[$key]['quantity'] = $quantity;
                }
            }
        } else {
            $err = __('website.quantityOf') . '(' . $product['name_' . app()->getLocale()] . ')' . __('website.notAvailable');
            return redirect()->back()->with('warning', $err);
        }
        session()->put('cart', $cart);
        session()->save();

        return redirect()->back();
    }

    public function destroy()
    {
        $cart = session()->get('cart');
        unset($cart[request('key')]);
        session()->put('cart', $cart);
        session()->save();
        return redirect()->route('cart.index')->with('info', __('messages.deletedFromOrder'));
    }

    public function confirm($address_id)
    {
        session()->put('address_id',$address_id);
        $address = Address::where([['id', $address_id],['client_id', auth('client')->user()->id]])->first();
        if ($address) {
            $paymentMethods = PaymentMethods::where('display', 1)->get();
            return view('website.cart.confirm',
                compact('address', 'paymentMethods'));
        }
        return abort(404);
    }

    public function addCoupon()
    {
        session()->forget('coupon');
        session()->forget('coupon_type');
        session()->save();

        $coupon = Coupon::where('code', request('coupon_code'))
            ->whereDate('from', '<', date('Y-m-d'))
            ->whereDate('to', '>', date('Y-m-d'))->first();
        if ($coupon) {
            session()->put('coupon', $coupon->discount ?? $coupon->percent_off);
            session()->put('coupon_type', $coupon->type);
            session()->save();
            return redirect()->back()->with('message', __('messages.validCoupon'));
        }

        return redirect()->back()->with('error', __('messages.invalidCoupon'));
    }

    public function postConfirm($address_id, Request $request)
    {
        $address = Address::where([['id', $address_id], ['client_id', auth('client')->user()->id]])->first();
        if ($address) {
            if (($request->get('subTotal') / currencyValue()) >= getMinOrder()) {
                foreach (session()->get('cart') as $cartProduct) {
                    if(SizeProducts::where('product_id', $cartProduct['product_id'] )->where('size_id',$cartProduct['size_id'] )->value('quantity') < $cartProduct['quantity']){
                       $product = Product::find($cartProduct['product_id']);
                       $err = __('website.quantityOf') . '(' . $product['name_' . app()->getLocale()] . ')' . __('website.notAvailable');
                       return redirect()->back()->with('warning', $err);
                    }

                }

                $order = Order::create([
                    'client_id' => auth('client')->user()->id,
                    'address_id' => $address_id,
                    'payment_id' => $request->get('payment'),
                    'sub_total' => $request->get('subTotal') / currencyValue(),
                    'discount' => $request->get('discount') / currencyValue(),
                    'coupon' => $request->get('coupon') / currencyValue(),
                    'vat' => $request->get('vat') / currencyValue(),
                    'delivery_charge' => $request->get('deliveryCost') / currencyValue(),
                    'net_total' => $request->get('netTotal') / currencyValue(),
                    'status' => 10,
                ]);

                foreach (session()->get('cart') as $cartProduct) {
                    $product = Product::find($cartProduct['product_id']);
                    DB::table('order_products')->insert([
                        'order_id' => $order->id,
                        'product_id' => $cartProduct['product_id'],
                        'price' => $product['price'],
                        'quantity' => $cartProduct['quantity'],
                        'size_id' => $cartProduct['size_id'] ?? 0,
                        'color_id' => $cartProduct['color_id'] ?? 0,
                        'total' => $cartProduct['quantity'] * $product['price'],
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'),
                    ]);
                    $product->quantity -= $cartProduct['quantity'];
                    SizeProducts::where('product_id', $product->id)->where('size_id',$cartProduct['size_id'] )->decrement('quantity',  $cartProduct['quantity']);
                    $product->save();
                }

                session()->put('order_id',$order->id );

                if ($request->get('payment') == 1) {
                    $order->status = 9;
                    $order->save();

                    session()->forget('cart');
                    session()->forget('key');
                    session()->save();

                    $emails = [setting('email') , auth('client')->user()->email];
                    Mail::to($emails)->send(new OrderSummary($order));

                    return redirect()->route('home')->with('message', __('messages.addedToOrdersuccessfully'));
                } elseif ($request->get('payment') == 2) {
                    return redirect()->to('https://artbabybh.com/Debit/init.php?orderID=' . $order->id . '&amount=' . $request->get('netTotal') / currencyValue() . '&clientID=' . auth('client')->user()->id);
                } elseif ($request->get('payment') == 3) {
                    return redirect()->to('https://artbabybh.com/Credit/credit/init.php?orderID=' . $order->id . '&amount=' . $request->get('netTotal') / currencyValue() . '&client_id=' . auth('client')->user()->id);
                }else{
                    return redirect()->to('https://artbabybh.com/payment/error?orderID=' . $order->id );
                }

            } else {
                return redirect()->back()->with('error', __('messages.subTotalGreater') . number_format(getMinOrder() * currencyValue(), 3) . ' ' . session()->get('currency'));
            }
        }
        return abort(404);
    }

    public function cashchange(Request $request)
    {
        $request['id'] == 1 ? session()->put('cash',true) :  session()->put('cash',false);
        session()->put('key',$request['id']);
        return response()->json(['id'=>$request['id']]);
    }
}
