<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReviewRequest;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{
    public function store(ReviewRequest $request)
    {
        DB::table('reviews')->insert([
            'client_id'     => auth('client')->user()->id,
            'product_id'    => $request->get('product_id'),
            'rate'          => $request->get('rate'),
            'review'        => $request->get('comment'),
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ]);

        return redirect()->back()->with('message', __('messages.reviewThanks'));
    }
}
