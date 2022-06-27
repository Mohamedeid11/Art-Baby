<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Order;
use App\Models\Product;
use App\Models\Category;
use App\Models\OrderProduct;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\CartRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class OrderController extends Controller
{
    public function new()
    {
        $orders = Order::where('status', 9)->orderBy('id', 'DESC')->get();

        return view('dashboard.order.new', compact('orders'));
    }

    public function declined()
    {
        $orders = Order::where('status', 8)->orderBy('id', 'DESC')->get();

        return view('dashboard.order.declined', compact('orders'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function current()
    {
        $orders = Order::whereIn('status', [0,1])->orderBy('id', 'DESC')->get();
        foreach ($orders as $key => $order) {
            if($order->deliveryId){
                $response = Http::post('https://www.delybell.com/api/home/checkOrderStatus', [
                    "api_token" => "14699478391392874621924340940820807627",
                    "order_id" => $order->deliveryId['orderId']
                ]);
                $order['status'] = $response['DeliveryStatus'];
            }
        }
        return view('dashboard.order.current', compact('orders'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function previous()
    {
        $orders = Order::where('status', 2)->orderBy('id', 'DESC')->get();
        return view('dashboard.order.previous', compact('orders'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $order = Order::where('status', 9)->findOrFail($id);
        $categories = Category::where('display', 1)->get();
        return view('dashboard.order.edit', compact('order', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function update(Request $request)
    {
        $order = Order::findOrFail($request->get('id'));

        if ($request->get('status') == 8) {
            foreach($order->orderProducts as $orderProduct) {
                $product = Product::find($orderProduct->product_id);
                if ($product->quantity) {
                    $product->quantity += $orderProduct->quantity;
                    $product->save();
                }
            }
        }

        $order->status = $request->get('status');
        $order->save();

        return redirect()->back()->with('message',
            __('messages.statusChangedSuccessfully', ['id' => $order->id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        foreach ($order->orderProducts as $orderProduct) {
            $orderProduct->delete();
        }
        $order->delete();

        return redirect()->back()->with('message', __('messages.orderDeletedSuccessfully'));
    }

    public function addProduct(CartRequest $request)
    {
        $order = Order::findOrFail($request->get('order_id'));
        $product = Product::findOrFail($request->get('product_id'));

        $cartProduct = OrderProduct::where([
            ['order_id', $request->get('order_id')],
            ['product_id', $request->get('product_id')]
        ])->first();

        if ($cartProduct) {
            $diff = $cartProduct->quantity - $request->get('quantity');
            $cartProduct->quantity = $request->get('quantity');
            $cartProduct->total = $request->get('quantity') * $cartProduct->price;
            $cartProduct->save();
            $product->quantity += $diff;
            $product->save();
        } else {
            if ($order->client->country == bahrain() || $product->deliverable == 1) {
                DB::table('order_products')->insert([
                    'order_id' => $request->get('order_id'),
                    'product_id' => $request->get('product_id'),
                    'price' => $product['price'],
                    'quantity' => $request->get('quantity'),
                    'total' => $request->get('quantity') * $product['price'],
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]);
            } else {
                return redirect()->back()->with('error', __('messages.productNotDeliverable'));
            }
        }

        $order = Order::find($request->get('order_id'));
        $subTotal = 0;
        $weight = 0;
        foreach ($order->orderProducts as $item) {
            $subTotal += $item->total;
            $weight += ($item->product->weight * $item->quantity);
        }

        $order->sub_total = $subTotal;
        $order->discount = $subTotal * setting('discount')/100;
        $order->vat = ($subTotal - $order->discount) * setting('VAT')/100;
        if($order->client->country == bahrain()) {
            $order->delivery_charge = currencyValue() * setting('delivery_cost');
        } else {
            $order->delivery_charge = currencyValue() * getDeliveryCharge($weight);
        }
        $order->net_total = $order->sub_total - $order->discount + $order->vat + $order->delivery_charge;
        $order->save();

        return redirect()->back()->with('message', __('messages.addedToOrder'));
    }

    public function deleteProduct($id)
    {
        $item = OrderProduct::findOrFail($id);
        $order_id = $item->order_id;
        $product = $item->product;
        $product->quantity += $item->quantity;
        $product->save();
        $item->delete();

        $order = Order::find($order_id);
        $subTotal = 0;
        $weight = 0;
        foreach ($order->orderProducts as $item) {
            $subTotal += $item->total;
            $weight += ($item->product->weight * $item->quantity);
        }

        $order->sub_total = $subTotal;
        $order->discount = $subTotal * setting('discount')/100;
        $order->vat = ($subTotal - $order->discount) * setting('VAT')/100;
        if($order->client->country == bahrain()) {
            $order->delivery_charge = currencyValue() * setting('delivery_cost');
        } else {
            $order->delivery_charge = currencyValue() * getDeliveryCharge($weight);
        }
        $order->net_total = $order->sub_total - $order->discount + $order->vat + $order->delivery_charge;
        $order->save();

        return redirect()->back()->with('message', __('messages.deletedFromOrder'));
    }
}
