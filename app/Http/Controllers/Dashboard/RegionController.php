<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\RegionRequest;
use App\Models\Region;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $regions = Region::all();
        return view('dashboard.region.index', compact('regions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('dashboard.region.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param RegionRequest $request
     * @return void
     */
    public function store(RegionRequest $request)
    {
        DB::table('regions')->insert([
            'name_ar'       => $request->get('name_ar'),
            'name_en'       => $request->get('name_en'),
            'display'       => $request->get('display'),
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        return redirect()->back()->with('message', __('messages.regionAddedSuccessfully'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $region = Region::findOrFail($id);
        return view('dashboard.region.edit', compact('region'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(RegionRequest $request, $id)
    {
        $region = Region::findOrFail($id);
        $region->name_ar = $request->get('name_ar');
        $region->name_en = $request->get('name_en');
        $region->display = $request->get('display');
        $region->save();
        return redirect()->back()->with('message', __('messages.regionUpdatedSuccessfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $region = Region::findOrFail($id);
        if (!$region->addresses) {
            $region->delete();
            return redirect()->back()->with('message', __('messages.regionDeletedSuccessfully'));
        } else {
            return redirect()->back()->with('error', __('messages.regionHasAddress'));
        }
    }

    /**
     * Update display status of the specified resource in storage.
     *
     * @return void
     */
    public function switch()
    {
        $region = Region::findOrFail(request('id'));
        $region->display = request('display');
        $region->save();
    }
}
