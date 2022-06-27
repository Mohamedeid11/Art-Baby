<?php

namespace App\Http\Controllers\Dashboard;

use App\Helper\Upload;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\TestimonialRequest;
use App\Models\Testimonial;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('dashboard.testimonial.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('dashboard.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param TestimonialRequest $request
     * @return Response
     */
    public function store(TestimonialRequest $request)
    {
        $next_id = DB::select("SHOW TABLE STATUS LIKE 'testimonials'");
        $next_id = $next_id[0]->Auto_increment;
        if ($request->file('image')) {
            $imageName = Upload::uploadImage($request->file('image'), 'testimonials/' . $next_id);
        }
        DB::table('testimonials')->insert([
            'name_ar'       => $request->get('name_ar'),
            'name_en'       => $request->get('name_en'),
            'desc_ar'       => $request->get('desc_ar'),
            'desc_en'       => $request->get('desc_en'),
            'image'         => $imageName ?? url('/uploads/lily.png'),
            'display'       => $request->get('display'),
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        return redirect()->back()->with('message', __('messages.testimonialAddedSuccessfully'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('dashboard.testimonial.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param TestimonialRequest $request
     * @param int $id
     * @return Response
     */
    public function update(TestimonialRequest $request, $id)
    {
        $testimonial                = Testimonial::findOrFail($id);
        $testimonial->name_ar       = $request->get('name_ar');
        $testimonial->name_en       = $request->get('name_en');
        $testimonial->desc_ar       = $request->get('desc_ar');
        $testimonial->desc_en       = $request->get('desc_en');
        $testimonial->display       = $request->get('display');
        if ($request->file('image')) {
            $testimonial->image = Upload::uploadImage($request->file('image'),
                'testimonials/' . $testimonial->id, $testimonial['image']);
        }
        $testimonial->save();
        return redirect()->back()->with('message', __('messages.testimonialUpdatedSuccessfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        Upload::deleteDirectory('testimonials/' . $testimonial->id);
        $testimonial->delete();
        return redirect()->back()->with('message', __('messages.testimonialDeletedSuccessfully'));
    }

    /**
     * Update display status of the specified resource in storage.
     *
     * @return void
     */
    public function switch()
    {
        $testimonial = Testimonial::findOrFail(request('id'));
        $testimonial->display = request('display');
        $testimonial->save();
    }
}
