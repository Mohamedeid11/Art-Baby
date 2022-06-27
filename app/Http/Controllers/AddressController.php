<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddressRequest;
use App\Models\Address;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $addressess = Address::where('client_id', auth('client')->user()->id)->get();
        return view('website.cart.address.index', compact('addressess'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $url = str_replace(url('/'), '', url()->previous());
        $url = ($url == '/cart/address');
        $regions = Region::orderBy('name_' . app()->getLocale())->get();
        return view('website.cart.address.create', compact('regions', 'url'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param AddressRequest $request
     * @return void
     */
    public function store(AddressRequest $request)
    {
        DB::table('addresses')->insert([
            'client_id' => auth('client')->user()->id,
            'region_id' =>  $request->get('region'),
            'city' => $request->get('city'),
            'name'=> $request->get('name'),
            'lat' => $request->get('lat') ?? 0,
            'long' => $request->get('long') ?? 0,
            'phone' => $request->get('phone'),
            'block' => $request->get('block'),
            'road' => $request->get('road'),
            'floor_no' => $request->get('floor_no'),
            'apartment' => $request->get('apartment'),
            'type' => $request->get('type') ?? '',
            'additional_directions' => $request->get('additional_directions') ?? '',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        return redirect()->route('address.index')->with('message', __('messages.addressAddedSuccessfully'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $url = str_replace(url('/'), '', url()->previous());
        $url = ($url == '/cart/address');
        $address = Address::findOrFail($id);
        $regions = Region::orderBy('name_' . app()->getLocale())->get();
        return view('website.cart.address.edit',
            compact('address', 'regions', 'url'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param AddressRequest $request
     * @param int $id
     * @return Response
     */
    public function update(AddressRequest $request, $id)
    {
        $address = Address::findOrFail($id);
        $address->region_id = $request->get('region') ?? '';
        $address->city = $request->get('city') ?? '';
        $address->lat = $request->get('lat') ?? '';
        $address->long = $request->get('long') ?? '';
        $address->block = $request->get('block') ?? '';
        $address->phone = $request->get('phone') ?? '';
        $address->road = $request->get('road') ?? '';
        $address->floor_no = $request->get('floor_no') ?? '';
        $address->apartment = $request->get('apartment') ?? '';
        $address->type = $request->get('type') ?? '';
        $address->additional_directions = $request->get('additional_directions') ?? '';

        $address->save();
        if ($request->get('url') == '1') {
            return redirect()->route('address.index')->with('message', __('messages.addressUpdatedSuccessfully'));
        } else {
            return redirect()->route('auth.profile')->with('message', __('messages.addressUpdatedSuccessfully'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $address = Address::findOrFail($id);
        $address->delete();
        return redirect()->back()->with('message', __('messages.addressDeletedSuccessfully'));
    }
}
