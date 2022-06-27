<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $agent_id = auth('agent')->user()->id;
        $productsCount = Product::where('agent_id', $agent_id)->count();
        return view('agent.home.index',
            compact(
                'productsCount'
            ));
    }

    public function logout()
    {
        auth('agent')->logout();
        return redirect()->route('dashboard.login');
    }
}
