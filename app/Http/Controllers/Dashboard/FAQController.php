<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\FAQRequest;
use App\Models\FAQ;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class FAQController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $faqs = FAQ::all();
        return view('dashboard.faq.index', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('dashboard.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param FAQRequest $request
     * @return void
     */
    public function store(FAQRequest $request)
    {
        $question_ar    = $request->get('question_ar');
        $question_en    = $request->get('question_en');
        $answer_ar      = $request->get('answer_ar');
        $answer_en      = $request->get('answer_en');
        $display        = $request->get('display');

        DB::table('faq')->insert([
            'question_ar'   => $question_ar,
            'question_en'   => $question_en,
            'answer_ar'     => $answer_ar,
            'answer_en'     => $answer_en,
            'display'       => $display,
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);
        return redirect()->back()->with('message', __('messages.Q/AAddedSuccessfully'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $faq = FAQ::findOrFail($id);
        return view('dashboard.faq.edit', compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param FAQRequest $request
     * @param int $id
     * @return void
     */
    public function update(FAQRequest $request, $id)
    {
        $faq = FAQ::findOrFail($id);
        $faq->question_ar   = $request->get('question_ar');
        $faq->question_en   = $request->get('question_en');
        $faq->answer_ar     = $request->get('answer_ar');
        $faq->answer_en     = $request->get('answer_en');
        $faq->display       = $request->get('display');
        $faq->save();
        return redirect()->back()->with('message', __('messages.Q/AUpdatedSuccessfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $faq = FAQ::findOrFail($id);
        $faq->delete();
        return redirect()->back()->with('message', __('messages.Q/ADeletedSuccessfully'));
    }

    /**
     * Update display status of the specified resource in storage.
     *
     * @return void
     */
    public function switch()
    {
        $faq = FAQ::findOrFail(request('id'));
        $faq->display = request('display');
        $faq->save();
    }
}
