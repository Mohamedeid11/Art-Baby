<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\ClientRequest;
use App\Models\Client;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $clients = Client::all();
        Session::put('data', $clients);
        Session::put('type', 'clients');
        return view('dashboard.client.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('dashboard.client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ClientRequest $request
     * @return Response
     */
    public function store(ClientRequest $request)
    {
        DB::table('clients')->insert([
            'first_name'    => $request->get('first_name'),
            'last_name'     => $request->get('last_name'),
            'phone'         => $request->get('phone'),
            'email'         => $request->get('email'),
            'password'      => bcrypt($request->get('password')),
            'display'       => $request->get('display'),
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        return redirect()->back()->with('message', __('messages.clientAddedSuccessfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $client = Client::findOrFail($id);
        return view('dashboard.client.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $client = Client::findOrFail($id);
        return view('dashboard.client.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ClientRequest $request
     * @param int $id
     * @return Response
     */
    public function update(ClientRequest $request, $id)
    {
        $client             = Client::findOrFail($id);
        $client->first_name = $request->get('first_name');
        $client->last_name  = $request->get('last_name');
        $client->phone      = $request->get('phone');
        $client->email      = $request->get('email');
        if (!empty($request->get('password'))) {
            $client->password = bcrypt($request->get('password'));
        }
        $client->display = $request->get('display');
        $client->save();
        return redirect()->back()->with('message', __('messages.clientUpdatedSuccessfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        foreach ($client->addresses as $address) {
            $address->delete();
        }
        $client->delete();
        return redirect()->back()->with('message', __('messages.clientDeletedSuccessfully'));
    }

    /**
     * Update display status of the specified resource in storage.
     *
     * @return void
     */
    public function switch()
    {
        $client = Client::findOrFail(request('id'));
        $client->display = request('display');
        $client->save();
    }
}
