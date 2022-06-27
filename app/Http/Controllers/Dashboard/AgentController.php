<?php

namespace App\Http\Controllers\Dashboard;

use App\Helper\Upload;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\AgentRequest;
use App\Models\Agent;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $agents = Agent::all();
        return view('dashboard.agent.index', compact('agents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('dashboard.agent.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param AgentRequest $request
     * @return Response
     */
    public function store(AgentRequest $request)
    {
        $next_id = DB::select("SHOW TABLE STATUS LIKE 'agents'");
        $next_id = $next_id[0]->Auto_increment;
        $imageName = Upload::uploadImage($request->file('image'), 'agents/' . $next_id);
        DB::table('agents')->insert([
            'name' => $request->get('name'),
            'name_en' => $request->get('name_en'),
            'email' => $request->get('email'),
            'password' => bcrypt($request->get('password')),
            'phone' => $request->get('phone'),
            'image' => $imageName,
            'display' => $request->get('display'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        return redirect()->back()->with('message', __('messages.agentAddedSuccessfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $agent = Agent::findOrFail($id);
        return view('dashboard.agent.show', compact('agent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $agent = Agent::findOrFail($id);
        return view('dashboard.agent.edit', compact('agent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param AgentRequest $request
     * @param int $id
     * @return Response
     */
    public function update(AgentRequest $request, $id)
    {
        $agent = Agent::findOrFail($id);
        $agent->name = $request->get('name');
        $agent->name_en = $request->get('name_en');
        $agent->email = $request->get('email');
        $agent->phone = $request->get('phone');
        $agent->display = $request->get('display');
        if ($request->has('password')) {
            $agent->password = bcrypt($request->get('password'));
        }
        if ($request->file('image')) {
            $agent->image = Upload::uploadImage($request->file('image'),
                'agents/' . $agent->id, $agent['image']);
        }
        $agent->save();
        return redirect()->back()->with('message', __('messages.agentUpdatedSuccessfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $agent = Agent::findOrFail($id);
        if (count($agent->products) == 0) {
            $agent->delete();
            return redirect()->back()->with('message', __('messages.agentDeletedSuccessfully'));
        } else {
            return redirect()->back()->with('error', __('messages.agentHasProducts'));
        }
    }

    /**
     * Update display status of the specified resource in storage.
     *
     * @return void
     */
    function switch () {
        $agent = Agent::findOrFail(request('id'));
        $agent->display = request('display');
        $agent->save();
    }
}
