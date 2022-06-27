<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FavoriteController extends Controller
{
    public function switch()
    {
        $fav = Favorite::where([
            ['client_id', auth('client')->user()->id],
            ['product_id', request('product_id')]
        ])->first();
        if ($fav) {
            $fav->delete();
            return response()->json('deleted');
        } else {
            DB::table('favorites')->insert([
                'client_id'     => auth('client')->user()->id,
                'product_id'    => request('product_id'),
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ]);
            return response()->json('inserted');
        }
    }
}
