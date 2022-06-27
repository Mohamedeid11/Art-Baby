<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\CurrencyRequest;
use App\Models\Currency;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class CurrencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $currencies = Currency::all();
        return view('dashboard.currency.index', compact('currencies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('dashboard.currency.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CurrencyRequest $request
     * @return Response
     */
    public function store(CurrencyRequest $request)
    {
        DB::table('currencies')->insert([
            'name_ar'       => $request->get('name_ar'),
            'name_en'       => $request->get('name_en'),
            'value'         => $request->get('value'),
            'display'       => $request->get('display'),
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        return redirect()->back()->with('message', __('messages.currencyAddedSuccessfully'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $currency = Currency::findOrFail($id);
        return view('dashboard.currency.edit', compact('currency'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CurrencyRequest $request
     * @param int $id
     * @return Response
     */
    public function update(CurrencyRequest $request, $id)
    {
        $currency           = Currency::findOrFail($id);
        $currency->name_ar  = $request->get('name_ar');
        $currency->name_en  = $request->get('name_en');
        $currency->value    = $request->get('value');
        $currency->display  = $request->get('display');
        $currency->save();
        return redirect()->back()->with('message', __('messages.currencyUpdatedSuccessfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $currency = Currency::findOrFail($id);
        if ($id != 1) {
            $currency->delete();
            return redirect()->back()->with('message', __('messages.currencyDeletedSuccessfully'));
        } else {
            return redirect()->back()->with('error', __('messages.currencyCantDeleted'));
        }
    }

    /**
     * Update display status of the specified resource in storage.
     *
     * @return void
     */
    public function switch()
    {
        $currency = Currency::findOrFail(request('id'));
        $currency->display = request('display');
        $currency->save();
    }
}
