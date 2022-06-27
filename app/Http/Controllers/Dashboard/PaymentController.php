<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\PaymentRequest;
use App\Models\PaymentMethods;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $payments = PaymentMethods::all();
        return view('dashboard.payment.index', compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('dashboard.payment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PaymentRequest $request
     * @return Response
     */
    public function store(PaymentRequest $request)
    {
        DB::table('payment_methods')->insert([
            'name_ar' => $request->get('name_ar'),
            'name_en' => $request->get('name_en'),
            'display' => $request->get('display'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        return redirect()->back()->with('message', __('messages.paymentAddedSuccessfully'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $payment = PaymentMethods::findOrFail($id);
        return view('dashboard.payment.edit', compact('payment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PaymentRequest $request
     * @param int $id
     * @return Response
     */
    public function update(PaymentRequest $request, $id)
    {
        $payment = PaymentMethods::findOrFail($id);
        $payment->name_ar = $request->get('name_ar');
        $payment->name_en = $request->get('name_en');
        $payment->display = $request->get('display');
        $payment->save();
        return redirect()->back()->with('message', __('messages.paymentUpdatedSuccessfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $payment = PaymentMethods::findOrFail($id);
        if ($id != 1) {
            $payment->delete();
            return redirect()->back()->with('message', __('messages.paymentDeletedSuccessfully'));
        } else {
            return redirect()->back()->with('error', __('messages.paymentCantDeleted'));
        }
    }

    /**
     * Update display status of the specified resource in storage.
     *
     * @return void
     */
    function switch () {
            $payment = PaymentMethods::findOrFail(request('id'));
            $payment->display = request('display');
            $payment->save();
    }
}
