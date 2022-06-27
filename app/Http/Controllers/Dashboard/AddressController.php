<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\AddressRequest;
use App\Models\Address;
use App\Models\Client;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class AddressController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $clients = Client::all();
        $regions = Region::all();
        return view('dashboard.client.address.create', compact('clients', 'regions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param AddressRequest $request
     * @return Response
     */
    public function store(AddressRequest $request)
    {
        DB::table('addresses')->insert([
            'client_id'             => $request->get('client'),
            'region_id'             => $request->get('region'),
            'lat'                   => $request->get('lat'),
            'long'                  => $request->get('long'),
            'phone'                 => $request->get('phone'),
            'block'                 => $request->get('block'),
            'road'                  => $request->get('road'),
            'floor_no'              => $request->get('floor_no'),
            'apartment'             => $request->get('apartment'),
            'type'                  => $request->get('type'),
            'additional_directions' => $request->get('additional_directions'),
            'created_at'            => date('Y-m-d H:i:s'),
            'updated_at'            => date('Y-m-d H:i:s'),
        ]);
        return redirect()->back()->with('message', __('messages.addressAddedSuccessfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $address = Address::findOrFail($id);
        return view('dashboard.client.address.show', compact('address'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $clients = Client::all();
        $regions = Region::all();
        $address = Address::findOrFail($id);
        return view('dashboard.client.address.edit',
            compact('address', 'clients', 'regions'));
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
        $address->client_id             = $request->get('client');
        $address->region_id             = $request->get('region');
        $address->lat                   = $request->get('lat');
        $address->long                  = $request->get('long');
        $address->phone                 = $request->get('phone');
        $address->block                 = $request->get('block');
        $address->road                  = $request->get('road');
        $address->floor_no              = $request->get('floor_no');
        $address->apartment             = $request->get('apartment');
        $address->type                  = $request->get('type');
        $address->additional_directions = $request->get('additional_directions');
        $address->save();
        return redirect()->back()->with('message', __('messages.addressUpdatedSuccessfully'));
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
