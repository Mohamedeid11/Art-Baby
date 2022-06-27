<?php

namespace App\Http\Controllers;


use App\Mail\OrderSummary;
use App\Models\Order;
use App\Models\Client;
use App\Models\Product;
use App\Models\SizeProducts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class BankPaymentController extends Controller
{
    public function creditInit()
    {
        return view('website.payment.credit');
    }

    public function creditResponse(Request $request)
    {
        $order = Order::find($request['orderID'] ?? session()->get('order_id'));
        if ($request['resultIndicator']) {
            $order->status = 9;
            $order->save();
            DB::table('transactions')->insert([
                'client_id' => $request['clientID'],
                'order_id' => $request['orderID'],
                'transaction_number' => $request['resultIndicator'],
                'value' => $order->net_total,
                'result' => 'success',
                'type' => 'credit',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
            session()->forget('cart');
            session()->save();

            $emails = [setting('email') , Client::find(['id' => $request['clientID']])->first()['email']];
            Mail::to($emails)->send(new OrderSummary($order));
            return redirect()->route('home')->with('message', __('messages.successProcess'));
        } else {
            DB::table('transactions')->insert([
                'client_id' => $request['clientID'],
                'order_id' => $request['orderID'],
                'transaction_number' => '',
                'value' => $order->net_total,
                'result' => 'not success',
                'type' => 'credit',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
            
            foreach (DB::table('order_products')->where('order_id',$request['orderID'])->get() as $item) {
                SizeProducts::where('product_id', $item->product_id)->where('size_id',$item->size_id )->first()->increment('quantity',  $item->quantity);
            }
            foreach ($order->orderProducts as $orderProduct) {
                $product = Product::find($orderProduct->product_id);
                if ($product->quantity) {
                    $product->quantity += $orderProduct->quantity;
                    $product->save();
                }
                $orderProduct->delete();
            }
            return redirect()->route('home')->with('error', 'Failed Process');
        }
    }

    public function init(Request $request)
    {
        $amount = $request['amount'];
        require_once app_path() . '/Debit/plugin/iPayBenefitPipe.php';
        $myObj = new \iPayBenefitPipe();
        //initialization
        $resourcePath = "resource/";
        $keystorePath = "resource/";

        $ResponseURL = "https://artbabybh.com/Debit/Response.php";

        $errorURL = "https://artbabybh.com/Debit/Error.php";
        $action = "1"; // 1–Purchase
        $aliasName = "prod17350950"; //Terminal Alias Name.
        $currency = "048"; //Transaction Currency. (ex: “414”)
        $language = "USA"; //(ex: “USA”)

        $track_number = rand(1, 1000000);
        $trackid = $track_number; //Merchant Track ID.
        //User Defined Fields.
        $Udf2 = 'Udf2';
        $Udf3 = "Udf3";
        $Udf4 = "Udf4";
        $Udf5 = "Udf5";
        //Set Values
        $myObj->setResourcePath($resourcePath);
        $myObj->setKeystorePath($keystorePath);
        $myObj->setAlias($aliasName);
        $myObj->setAction($action);
        $myObj->setCurrency($currency);
        $myObj->setLanguage($language);
        $myObj->setResponseURL($ResponseURL);
        $myObj->setErrorURL($errorURL);
        $myObj->setAmt($amount);
        $myObj->setTrackId($trackid);
        $myObj->setUdf2($Udf2);
        $myObj->setUdf3($Udf3);
        $myObj->setUdf4($Udf4);
        $myObj->setUdf5($Udf5);

        /* For Bank Hosted Payment Integration, the method to be called is */
        if (trim($myObj->performPaymentInitializationHTTP()) != 0) {
            echo ("ERROR OCCURED! SEE CONSOLE FOR MORE DETAILS");
            return;
        } else {
            $url = $myObj->getwebAddress();
            echo "<meta http-equiv='refresh' content='0;url=$url'>";
        }
        /* End of Request Processing*/
    }

    public function response()
    {
        require_once app_path() . '/Debit/plugin/iPayBenefitPipe.php';
        $resourcePath = "resource/"; //Mandatory
        $keystorePath = "resource/"; //Mandatory
        //Terminal Alias Name in the merchant portal for the terminal
        $aliasName = "prod17350950";

        $myObj = new \iPayBenefitPipe();
        $myObj->setAlias(trim($aliasName));
        $myObj->setResourcePath(trim($resourcePath));
        $myObj->setKeystorePath(trim($keystorePath)); //The method to be called for decrypting the response send by Payment Gateway

        if (!empty(($_SERVER["QUERY_STRING"]))) {
            parse_str($_SERVER["QUERY_STRING"]);
        } else {
            $trandata = isset($request["trandata"]) ? $request["trandata"] : (isset($_POST["trandata"]) ? $_POST["trandata"] : "");
            $returnValue = $myObj->parseEncryptedRequest($trandata);
        }

        $Result = $myObj->getResult();
        $PaymentId = $myObj->getPaymentId();
        $TransId = $myObj->getTransId();
        $Amt = $myObj->getAmt();

        $order_id = $myObj->getUdf2();
        var_dump($PaymentId, $client_id, $order_id);
        if ($Result == "CAPTURED") {
            if (isset($order_id) && $order_id != '') {
                addOrder($order_id, $PaymentId);
            }
            echo ("REDIRECT=https://artbabybh.com/payment/Success?PaymentId=" . $PaymentId);
        } else if ($Result == "NOT CAPTURED") {
            echo ("REDIRECT=https://artbabybh.com/payment/Failed?Result=" . $Result . '&PaymentId=' . $PaymentId);
        } else {
            echo ("REDIRECT=https://artbabybh.com/payment/notfound?Result=" . $Result . '&PaymentId=' . $PaymentId);
        }

        if (isset($request["ErrorText"])) {
            $ErrorText = $request["ErrorText"];
        }

        /* End of Response Processing */
    }

    public function error(Request $request)
    {
        $order = Order::find($request['orderID'] ?? session()->get('order_id'));
        if ( $order ) {
            foreach (DB::table('order_products')->where('order_id',$request['orderID'])->get() as $item) {
                SizeProducts::where('product_id', $item->product_id)->where('size_id',$item->size_id )->first()->increment('quantity',  $item->quantity);
            }
            foreach ($order->orderProducts as $orderProduct) {
                $product = Product::find($orderProduct->product_id);
                if ($product->quantity) {
                    $product->quantity += $orderProduct->quantity;
                    $product->save();
                }
                $orderProduct->delete();
            }
            $order->delete();
        }
        return redirect()->route('home')->with('message', 'Error Process');
    }

    public function success(Request $request)
    {
        $order = Order::find($request['orderID'] ?? session()->get('order_id'));
        $order->status = 9;
        $order->save();
        DB::table('transactions')->insert([
            'client_id' => $request['clientID'],
            'order_id' => $request['orderID'],
            'transaction_number' => $request['PaymentId'] ?? 0,
            'value' => $order->net_total,
            'result' => 'success',
            'type' => $request['method'] ?? '',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        session()->forget('cart');
        session()->forget('key');
        session()->save();

        $emails = [setting('email') , Client::find(['id' => $request['clientID']])->first()['email']];
        Mail::to($emails)->send(new OrderSummary($order));
        return redirect()->route('home')->with('message', 'Success Process');
    }

    public function failed(Request $request)
    {
        $order = Order::find($request['orderID'] ?? session()->get('order_id'));
        DB::table('transactions')->insert([
            'client_id' => $request['clientID'],
            'order_id' => $request['orderID'],
            'transaction_number' => $request['PaymentId'] ?? 0,
            'value' => $order->net_total,
            'result' => 'not success',
            'type' => $request['method'] ?? '',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        
        foreach (DB::table('order_products')->where('order_id',$request['orderID'])->get() as $item) {
            SizeProducts::where('product_id', $item->product_id)->where('size_id',$item->size_id )->first()->increment('quantity',  $item->quantity);
        }
        foreach ($order->orderProducts as $orderProduct) {
            $product = Product::find($orderProduct->product_id);
            if ($product->quantity) {
                $product->quantity += $orderProduct->quantity;
                $product->save();
            }
            $orderProduct->delete();
        }
        return redirect()->route('home')->with('error', 'Failed Process');
    }

    public function decline(Request $request)
    {
        $order = Order::find($request['orderID'] ?? session()->get('order_id'));
        foreach (DB::table('order_products')->where('order_id',$request['orderID'])->get() as $item) {
            SizeProducts::where('product_id', $item->product_id)->where('size_id',$item->size_id )->first()->increment('quantity',  $item->quantity);
        }
        foreach ($order->orderProducts as $orderProduct) {
            $product = Product::find($orderProduct->product_id);
            if ($product->quantity) {
                $product->quantity += $orderProduct->quantity;
                $product->save();
            }
            $orderProduct->delete();
        }
        $order->delete();
        return redirect()->route('home')->with('error', 'Decline Process');
    }

}
