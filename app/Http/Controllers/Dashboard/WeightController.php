<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\WeightRequest;
use App\Models\Weight;
use Illuminate\Support\Facades\Response;

class WeightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $weights = Weight::all();
        return view('dashboard.weight.index', compact('weights'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('dashboard.weight.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param WeightRequest $request
     * @return void
     */
    public function store(WeightRequest $request)
    {
        Weight::create([
            'weight'    => $request->get('weight'),
            'price'     => $request->get('price'),
        ]);
        return redirect()->back()->with('message', __('messages.weightAddedSuccessfully'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $weight = Weight::findOrFail($id);
        return view('dashboard.weight.edit', compact('weight'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param WeightRequest $request
     * @param int $id
     * @return Response
     */
    public function update(WeightRequest $request, $id)
    {
        $weight = Weight::findOrFail($id);
        $weight->weight     = $request->get('weight');
        $weight->price      = $request->get('price');
        $weight->save();
        return redirect()->back()->with('message', __('messages.weightUpdatedSuccessfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $weight = Weight::findOrFail($id);
        $weight->delete();
        return redirect()->back()->with('message', __('messages.weightDeletedSuccessfully'));
    }
}
