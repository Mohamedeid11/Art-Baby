<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\CouponRequest;
use App\Models\Coupon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $coupons = Coupon::all();
        return view('dashboard.coupon.index', compact('coupons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('dashboard.coupon.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CouponRequest $request
     * @return Response
     */
    public function store(CouponRequest $request)
    {
        DB::table('coupons')->insert([
            'code'          => $request->get('code'),
            'type'          => $request->get('type'),
            'discount'      => $request->get('discount'),
            'percent_off'   => $request->get('percent_off'),
            'from'          => $request->get('from'),
            'to'            => $request->get('to'),
        ]);
        return redirect()->back()->with('message',
            __('messages.couponAddedSuccessfully'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Coupon $coupon
     * @return Response
     */
    public function edit($id)
    {
        $coupon = Coupon::where('id',$id)->first();
        return view('dashboard.coupon.edit', compact('coupon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CouponRequest $request
     * @param Coupon $coupon
     * @return void
     */
    public function update($id, CouponRequest $request)
    {
        Coupon::where('id',$id)->update($request->validated());
        return redirect()->back()->with('message',
            __('messages.couponUpdatedSuccessfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Coupon $coupon
     * @return Response
     * @throws \Exception
     */
    public function destroy($id)
    {
        Coupon::where('id',$id)->delete();
        return redirect()->back()->with('message',
            __('messages.couponDeletedSuccessfully'));
    }
}
