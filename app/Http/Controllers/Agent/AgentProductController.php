<?php

namespace App\Http\Controllers\Agent;

use App\Models\Agent;
use App\Models\Color;
use App\Helper\Upload;
use App\Models\Review;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\ProductRequest;

class AgentProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $agent_id = auth('agent')->user()->id;
        $categories = Category::all();
        $products = Product::where('id', '>', 0)->where('agent_id', $agent_id);
        if (isset($_GET['price_from']) && !empty($_GET['price_from'])) {
            $products = $products->where('price', '>=', $_GET['price_from']);
        }
        if (isset($_GET['price_to']) && !empty($_GET['price_to'])) {
            $products = $products->where('price', '<=', $_GET['price_to']);
        }
        if (isset($_GET['category']) && !empty($_GET['category'])) {
            $products = $products->where('category_id', $_GET['category']);
        }
        if (isset($_GET['name']) && !empty($_GET['name'])) {
            $products = $products->where(function ($query) {
                $query->where('name_ar', 'LIKE', "%{$_GET['name']}%")
                    ->orWhere('name_en', 'LIKE', "%{$_GET['name']}%");
            });
        }
        $products = $products->get();

        return view('agent.product.index', compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $categories = Category::all();
        $colors = Color::all();
        $agents = Agent::all();
        return view('agent.product.create', compact('categories', 'colors', 'agents'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ProductRequest $request
     * @return void
     */
    public function store(ProductRequest $request)
    {
        $next_id = DB::select("SHOW TABLE STATUS LIKE 'products'");
        $next_id = $next_id[0]->Auto_increment;
        $imagesName = Upload::uploadImages(request('images'),
            'products/' . $next_id);
        $id = DB::table('products')->insertGetId([
            'category_id' => $request->get('category'),
            'agent_id' => $request->get('agent'),
            'name_ar' => $request->get('name_ar'),
            'name_en' => $request->get('name_en'),
            'desc_ar' => $request->get('desc_ar'),
            'desc_en' => $request->get('desc_en'),
            'price' => $request->get('price'),
            'quantity' => $request->get('quantity'),
            'code' => $request->get('code'),
            'cost' => $request->get('cost'),
            'discount' => $request->get('discount') ?? null,
            'discount_from' => $request->get('discount_from') ?? null,
            'discount_to' => $request->get('discount_to') ?? null,
            'display' => $request->get('display'),
            'deliverable' => $request->get('deliverable'),
            'featured' => $request->get('featured'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        foreach ($request->color as $color) {
            DB::table('color_products')->insert([
                'product_id' => $id,
                'color_id' => $color,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }

        foreach ($imagesName as $image) {
            DB::table('product_images')->insert([
                'product_id' => $id,
                'image' => $image,
            ]);
        }
        return redirect()->back()->with('message', __('messages.productAddedSuccessfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('agent.product.show', compact('product'));
    }

    public function comments(Product $product)
    {
        return view('agent.product.comments', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $agents = Agent::all();
        $colors = Color::all();
        $product = Product::findOrFail($id);
        return view('agent.product.edit', compact('product', 'categories', 'agents', 'colors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ProductRequest $request
     * @param int $id
     * @return Response
     */
    public function update(ProductRequest $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->category_id = $request->get('category');
        $product->agent_id = $request->get('agent');
        $product->name_ar = $request->get('name_ar');
        $product->name_en = $request->get('name_en');
        $product->desc_ar = $request->get('desc_ar');
        $product->desc_en = $request->get('desc_en');
        $product->price = $request->get('price');
        $product->quantity = $request->get('quantity');
        $product->code = $request->get('code');
        $product->cost = $request->get('cost');
        $product->discount = $request->get('discount') ?? null;
        $product->discount_from = $request->get('discount_from') ?? null;
        $product->discount_to = $request->get('discount_to') ?? null;
        $product->display = $request->get('display');
        $product->deliverable = $request->get('deliverable');
        $product->featured = $request->get('featured');
        if (request('color')) {
            foreach ($request->color as $color) {
                if (!in_array($color, $product->color()->pluck('color_id')->toArray())) {
                    DB::table('color_products')->insert([
                        'product_id' => $id,
                        'color_id' => $color,
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'),
                    ]);
                }
            }
        }
        if (request('images')) {
            $imagesName = Upload::uploadImages(request('images'),
                'products/' . $product->id);
        }
        $product->save();
        if (isset($imagesName) && is_array($imagesName)) {
            foreach ($imagesName as $image) {
                DB::table('product_images')->insert([
                    'product_id' => $product->id,
                    'image' => $image,
                ]);
            }
        }
        return redirect()->back()->with('message', __('messages.productUpdatedSuccessfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        foreach ($product->images as $image) {
            $image->delete();
        }
        Upload::deleteDirectory('products/' . $product->id);
        $product->delete();
        return redirect()->back()->with('message', __('messages.productDeletedSuccessfully'));
    }

    /**
     * Update display status of the specified resource in storage.
     *
     * @return void
     */
    function switch () {
            $product = Product::findOrFail(request('id'));
            $product->display = request('display');
            $product->save();
    }

    /**
     * Remove the specified image from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroyImage($id)
    {
        $image = ProductImage::findOrFail($id);
        $product = $image->product;
        if (count($product->images) > 1) {
            Upload::deleteImage($image->image, 'products/' . $product->id);
            $image->delete();
            return redirect()->back()->with('message', __('messages.imageDeletedSuccessfully'));
        } else {
            return redirect()->back()->with('error', __('messages.cantDeleteLastImage'));
        }

    }

    /**
     * Remove the specified image from storage.
     *
     * @param Product $product
     * @param Review $review
     * @return Response
     * @throws Exception
     */
    public function destroyReview(Product $product, Review $review)
    {
        $review->delete();
        return redirect()->back()->with('message', __('messages.reviewDeletedSuccessfully'));
    }
}
