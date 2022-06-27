<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Agent;
use App\Models\Category;
use App\Models\Color;
use App\Models\Currency;
use App\Models\FAQ;
use App\Models\ourFollowers;
use App\Models\Product;
use App\Models\Recipe;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        $page = 'home';
//        slider code
        $allsliders = Slider::all();
        $sliders = $allsliders->where('display', 1)->where('type', 1);

        if ($allsliders->where('type', 2)->count() > 0) {
            $category_f = Slider::where('display', 1)->where('type', 2)->get()->last();
        } else {
            $category_f = [];
        }
        if ($allsliders->where('type', 3)->count() > 0) {
            $category_r = Slider::where('display', 1)->where('type', 3)->get()->last();
        } else {
            $category_r = [];
        }

        $ournew = $allsliders->where('display', 1)->where('type', 3);

//        duplicated code
//        if (Slider::where('type', 2)->get()->count() > 0) {
//            $category_f = Slider::where('display', 1)->where('type', 2)->get()->last();
//        } else {
//            $category_f = [];
//        }
//        if (Slider::where('type', 3)->get()->count() > 0) {
//            $category_r = Slider::where('display', 1)->where('type', 3)->get()->last();
//        } else {
//            $category_r = [];
//        }

//        duplicated code


//end of the slider code


        $allproducts = Product::with('images')->get();

        $products = sliderFormat($allproducts->where('display', 1)->toArray(),4);

        $FeaturedProducts = Product::with('images')->where('display', 1)->where('featured', 1)->get();
        $featuredProducts = $FeaturedProducts->chunk(3);
        $featuredProductsSm = $FeaturedProducts;

        $RecentProducts = Product::where('display', 1)->where('created_at', '>', now()->subDays(30))->get();
        $recentProducts = $RecentProducts->chunk(3);
        $recentProductsSm = $RecentProducts;


        $categories = Category::where('display', 1)->inRandomOrder()->get();
        $mostselling = Category::with(['products'=> function ($query){
            $query->where('display' , 1);
            $query->with(['images']);
        }])->get();

        if ($mostselling->count() < 4) {
            $mostselling = $mostselling->random($mostselling->count());
        } else {
            $mostselling = $mostselling->random(4);
        }
        $cats = Category::inRandomOrder()->limit(2)->get();

        return view('website.home.index', compact(
            'sliders',
            'ournew',
            'products',
            'allproducts',
            'featuredProducts',
            'featuredProductsSm',
            'recentProducts',
            'recentProductsSm',
            'page',
            'category_f',
            'category_r',
            'categories',
            'mostselling',
            'cats'
        ));
    }

    // public function brands()
    // {
    //     $brands = Agent::where('display', 1)->get();
    //     $categories = Category::where('display', 1)->get();
    //     return view('website.brands.index', compact('categories', 'brands'));
    // }

    // public function searchBrands(Request $request)
    // {
    //     if ($request->method() == 'POST') {
    //         $brand = $request->get('brand');
    //         $brands = Agent::where('name', 'LIKE', '%' . $brand . '%')->get();
    //         $categories = Category::all();
    //         $colors = Color::where('display', 1)->get();
    //         if ($request->has('key')) {
    //             $agent = $request->get('key');
    //             $products = Product::where('quantity', '>', 0)->where('display', 1)->where('agent_id', $agent)->get();
    //             return view(
    //                 'website.categories.index',
    //                 compact('products', 'categories', 'colors')
    //             );
    //         }
    //         return view('website.brands.index', compact('brands', 'categories', 'colors', 'brand'));
    //     }
    // }

    public function categories()
    {
        $categories = Category::where('display', 1)->get();
        return view('website.categories.search', compact('categories'));
    }

    // public function products()
    // {
    //     $products = Product::where('quantity','>',0)->where('display', 1)->get();
    //     return view('website.categories.search', compact('products'));
    // }

    public function searchCategories(Request $request)
    {
        if ($request->method() == 'POST') {
            $category = $request->get('category');
            $categories = Category::where(function ($query) use ($category) {
                $query->where('name_ar', 'LIKE', '%' . $category . '%')
                    ->orWhere('name_en', 'LIKE', '%' . $category . '%');
            })->get();
            if ($request->has('key')) {
                $categories = Category::all();
                $colors = Color::where('display', 1)->get();
                $category = $request->get('key');
                $products = Product::with('images')->where('quantity', '>', 0)->where('display', 1)->where('category_id', $category);
                return view(
                    'website.categories.index',
                    compact('products', 'categories', 'colors')
                );
            }
            return view('website.categories.index', compact('categories'));
        }
    }

    public function category(Category $category)
    {
        $products = Product::where('quantity', '>', 0)->where('display', 1)->where('category_id', $category->id);
        $categories = Category::all();
        $colors = Color::where('display', 1)->get();
        return view('website.categories.index', compact('products', 'categories', 'colors'));
    }

    public function categories_delete($id)
    {
        Category::where('id', $id)->delete();
        return redirect()->back();
    }

    public function search(Request $request)
    {
        $price[0] =  $request->min_price ?? 0;
        $price[1] =  $request->max_price ?? 10000;

        $currencyValue = currencyValue();

        $started_price = $price[0] * $currencyValue;
        $end_price = $price[1] * $currencyValue;
        if ($request->has('category')) {
            $category = $request->get('category');
        } else {
            $category = Category::where('id', '>', 0)->pluck('id')->toArray();
        }

        if ($request->has('color')) {
            $color = $request->get('color');
        } else {
            $color = Color::where('id', '>', 0)->where('display', 1)->pluck('id')->toArray();
        }

        $products = Product::with(['category','images' , 'reviews' , 'color'])->where('quantity', '>', 0)
            ->whereBetween('price', [ $started_price , $end_price]);

        if ($request->has('search')) {
            $name = $request->get('search') ?? '';
            $products->where(function ($query) use ($name) {
                $query->where('name_ar', 'LIKE', '%' . $name . '%')
                    ->orWhere('name_en', 'LIKE', '%' . $name . '%');
            });
        }
        if ($request->category) {
            $products->Join('color_products', 'color_products.product_id', '=', 'products.id', 'left outer')
                ->where(function ($query) use ($category, $color) {
                    $query->whereIn('category_id' , $category);
                });
        }
        $products->select('*', 'products.id as id')->groupBy('products.id');
        if ($request->has('key')) {
            if ($request->get('key') == "HP") {
                $products = $products->orderby('price', 'Desc');
            } elseif ($request->get('key') == "LP") {
                $products = $products->orderby('price');
            } elseif ($request->get('key') == "TR") {
                $products = $products->Join('reviews', 'reviews.product_id', '=', 'products.id', 'left outer')->orderby('rate', 'Desc');
            } elseif ($request->get('key') == "NA") {
                $products = $products->orderby('products.created_at', 'Desc');
            }
        }
        $categories = Category::all();
        $colors = Color::where('display', 1)->get();
        if (!isset($products)) {
            return redirect()->route('home')->with('info', __('website.noProducts'));
        }

        return view('website.categories.index',
            compact('products', 'price', 'categories', 'colors')
        );
    }

    public function products()
    {
        $products = Product::where('quantity', '>', 0)->all();
        return view('website.products', compact('products'));
    }

    public function testimonials()
    {
        $testimonials = Testimonial::all();
        return view('website.testimonials', compact('testimonials'));
    }

    public function recipes()
    {
        $recipes = Recipe::all();
        return view('website.recipes', compact('recipes'));
    }

    public function about()
    {
        $About = Setting::where('type', 'about')->get();
        return view('website.about', compact('About'));
    }

    public function contact()
    {
        $page = 'contact';
        return view('website.contact', compact('page'));
    }

    public function leaveMessage(ContactRequest $request)
    {
        $name       = $request->get('name');
        $email      = $request->get('email');
        $phone      = $request->get('phone');
        $subject    = $request->get('subject');
        $message    = $request->get('message');

        DB::table('contacts')->insert([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'subject' => $subject,
            'message' => $message,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect()->back()->with('success', __('messages.messageSentSuccessfully'));
    }

    public function returnRefundPolicy()
    {
        $returnRefundPolicy = Setting::where('type', 'return')->get();
        return view('website.returnRefundPolicy', compact('returnRefundPolicy'));
    }

    public function termsConditions()
    {
        $terms  = Setting::where('type', 'terms')->get();
        return view('website.termsConditions', compact('terms'));
    }

    public function faq()
    {
        $faqs = FAQ::where('display', 1)->get();
        return view('website.faq', compact('faqs'));
    }

    public function getDeliveryCharge()
    {
        return getDeliveryCharge();
    }

    public function lang($locale)
    {
        if (in_array($locale, config()->get('app.locales'))) {
            session(['locale' => $locale]);
        }
        return redirect()->back();
    }

    public function currency($currency)
    {
        if (in_array($currency, currencies())) {
            session(['currency' => $currency]);
        }
        return redirect()->back();
    }

    public function follow(Request $request)
    {
        if (!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            return redirect()->back()->with('error', __('messages.invalidemail'));
        }
        ourFollowers::create(['email' => $request->email]);
        return redirect()->back()->with('message', __('website.EmailAddedSuccessfully'));
    }
}
