<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Client;
use App\Models\Order;
use App\Models\Product;
use App\Models\Recipe;
use App\Models\Slider;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categoriesCount        = Category::all()->count();
        $productsCount          = Product::all()->count();
        $clientsCount           = Client::all()->count();
        $currentOrdersCount     = Order::whereIn('status', [0,1])->get()->count();
        $previousOrdersCount    = Order::where('status', 2)->get()->count();
        $sliderCount            = Slider::all()->count();
        $testimonialsCount      = Testimonial::all()->count();
        $recipesCount           = Recipe::all()->count();
        return view('dashboard.home.index',
            compact(
                'categoriesCount',
                'productsCount',
                'clientsCount',
                'currentOrdersCount',
                'previousOrdersCount',
                'sliderCount',
                'testimonialsCount',
                'recipesCount'
            ));
    }
}
