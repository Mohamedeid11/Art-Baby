<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class TransportController extends Controller
{
    public function index($order_id)
    {
        $order = Order::where('id', $order_id)->first();
        return view('dashboard.transport.index', compact('order'));
    }

    public function stepOne(Request $request)
    {
        return view('dashboard.transport.stepOne', compact('request'));
    }

    public function stepTwo(Request $request)
    {
        $order = Order::where('id', $request->get('order_id'))->first();
        return view('dashboard.transport.stepTwo', compact('request', 'order'));
    }

    public function send(Request $request)
    {
        $response = Http::post('https://www.delybell.com/api/home/apiOrderAdd', [
            "api_token" => "14699478391392874621924340940820807627",
            "delivery_type" => $request->get('delivery_type'),
            "total_weight" => $request->get('total_weight'),
            "boxcount" => $request->get('boxcount'),
            "user_selected_pickupdate" =>  $request->get('user_selected_pickupdate'),
            "user_selected_pickup_time" =>  $request->get('user_selected_pickup_time'),
            "user_selected_delivery_date" =>  $request->get('user_selected_delivery_date'),
            "user_selected_delivery_time" =>  $request->get('user_selected_delivery_time'),
            "p_name" => $request->get('p_name'),
            "p_phone" =>  $request->get('p_phone'),
            "p_building"=>  $request->get('p_building'),
            "p_road_no"=> $request->get('p_road_no'),
            "p_block_no"=>  $request->get('p_block_no'),
            "p_location"=>  $request->get('p_location'),
            "from_lat"=>  $request->get('from_lat'),
            "from_lng"=>  $request->get('from_lng'),
            "d_name"=>  $request->get('d_name'),
            "d_phone"=>  $request->get('d_phone'),
            "d_building"=>  $request->get('d_building'),
            "d_road_no"=>  $request->get('d_road_no'),
            "d_block_no"=>  $request->get('d_block_no'),
            "d_location"=>  $request->get('d_location'),
            "to_lat"=> $request->get('to_lat'),
            "To_lng"=>  $request->get('To_lng'),
        ]);
        if($response['error'] == false){
            DB::table('delivery_orders')->insert([
                'order_id'       => $request->get('order_id'),
                'orderId'       => $response['orderId'],
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ]);
            return redirect()->route('orders.current')->with('message', $response['message']);
        } else {
            return redirect()->route('orders.current')->with('error', $response['message']);
        }
    }
}
