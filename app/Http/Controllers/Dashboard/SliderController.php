<?php

namespace App\Http\Controllers\Dashboard;

use App\Helper\Upload;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\SliderRequest;
use App\Models\Category;
use App\Models\Slider;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('dashboard.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        // $categories = Category::all();
        return view('dashboard.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param SliderRequest $request
     * @return Response
     */
    public function store(SliderRequest $request)
    {
        $imageName = Upload::uploadImage($request->file('image'), 'slider');
        DB::table('sliders')->insert([
            'title' => $request->get('title'),
            'type' => $request->get('type'),
            'image' => $imageName,
            'display' => $request->get('display'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        return redirect()->back()->with('message', __('messages.imageAddedSuccessfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);
        Upload::deleteImage($slider->image, 'slider');
        $slider->delete();
        return redirect()->back()->with('message', __('messages.imageDeletedSuccessfully'));
    }

    /**
     * Update display status of the specified resource in storage.
     *
     * @return void
     */
    function switch () {
            $slider = Slider::findOrFail(request('id'));
            $slider->display = request('display');
            $slider->save();
    }
}
