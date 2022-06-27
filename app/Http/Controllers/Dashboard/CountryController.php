<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\CountryRequest;
use App\Models\Country;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $countries = Country::all();
        return view('dashboard.country.index', compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('dashboard.country.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CountryRequest $request
     * @return void
     */
    public function store(CountryRequest $request)
    {
        DB::table('countries')->insert([
            'name_ar' => $request->get('name_ar'),
            'name_en' => $request->get('name_en'),
            'display' => $request->get('display'),
            'delivery_cost' => $request->get('delivery_cost'),
            'min_order' => $request->get('min_order'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        return redirect()->back()->with('message', __('messages.countryAddedSuccessfully'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $country = Country::findOrFail($id);
        return view('dashboard.country.edit', compact('country'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CountryRequest $request
     * @param int $id
     * @return Response
     */
    public function update(CountryRequest $request, $id)
    {
        $country = Country::findOrFail($id);
        $country->name_ar = $request->get('name_ar');
        $country->name_en = $request->get('name_en');
        $country->display = $request->get('display');
        $country->delivery_cost = $request->get('delivery_cost');
        $country->min_order = $request->get('min_order');
        $country->save();
        return redirect()->back()->with('message', __('messages.countryUpdatedSuccessfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $country = Country::findOrFail($id);
        $country->delete();
        return redirect()->back()->with('message', __('messages.countryDeletedSuccessfully'));
    }

    /**
     * Update display status of the specified resource in storage.
     *
     * @return void
     */
    function switch () {
            $country = Country::findOrFail(request('id'));
            $country->display = request('display');
            $country->save();
    }
}
