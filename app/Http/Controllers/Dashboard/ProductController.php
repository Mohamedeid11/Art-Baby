<?php

namespace App\Http\Controllers\Dashboard;

use App\Helper\Upload;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\ProductRequest;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Review;
use App\Models\Size;
use App\Models\SizeProducts;
use App\Models\Weight;
use Exception;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $categories = Category::all();
        // $agents = Agent::all();
//        $products = Product::orderby('id', 'DESC')->where('id', '>', 0);


//        This one was edited with laravel eager
        $products = Product::with(['products' => function ($query) {
            $query->orderBy('id', 'desc')->where('id' , '>' , 0);
        }])->get();

        if (isset($_GET['price_from']) && !empty($_GET['price_from'])) {
            $products = $products->where('price', '>=', $_GET['price_from']);
        }
        if (isset($_GET['price_to']) && !empty($_GET['price_to'])) {
            $products = $products->where('price', '<=', $_GET['price_to']);
        }
        if (isset($_GET['category']) && !empty($_GET['category'])) {
            $products = $products->where('category_id', $_GET['category']);
        }
        // if (isset($_GET['agent']) && !empty($_GET['agent'])) {
        //     $products = $products->where('agent_id', $_GET['agent']);
        // }
        if (isset($_GET['name']) && !empty($_GET['name'])) {
            $products = $products->where(function ($query) {
                $query->where('name_ar', 'LIKE', "%{$_GET['name']}%")
                    ->orWhere('name_en', 'LIKE', "%{$_GET['name']}%");
            });
        }
        $products = $products->get();

        return view('dashboard.product.index', compact('products', 'categories' ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $categories = Category::all();
        // $agents = Agent::all();
        $sizes = Size::all();
        $colors = Color::all();
        $weights = Weight::all();
        return view('dashboard.product.create', compact('categories', 'colors', 'sizes', 'weights'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ProductRequest $request
     * @return void
     */
    public function store(ProductRequest $request)
    {
        $size_quantity = [];
        $quantitycalc = 0;
        for ($i = 0; $i < count($request->size); $i++) {
            $quantitycalc += $request->quantity[$i];
            $size_quantity[] = [
                'size' => $request->size[$i],
                'quantity' => $request->quantity[$i],
            ];
        }
        $next_id = DB::select("SHOW TABLE STATUS LIKE 'products'");
        $next_id = $next_id[0]->Auto_increment;
        $imagesName = Upload::uploadImages(request('images'),'products/' . $next_id);
        $id = DB::table('products')->insertGetId([
            'category_id' => $request->get('category'),
            'name_ar' => $request->get('name_ar'),
            'name_en' => $request->get('name_en'),
            'desc_ar' => $request->get('desc_ar'),
            'desc_en' => $request->get('desc_en'),
            'weight_id' => $request->get('weight'),
            'quantity' => $quantitycalc,
            'price' => $request->get('price'),
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

        foreach ($size_quantity as $index) {
            DB::table('size_products')->insert([
                'product_id' => $id,
                'size_id' => $index['size'],
                'quantity' => $index['quantity'],
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
        // dd('show');
        $product = Product::findOrFail($id);
        return view('dashboard.product.show', compact('product'));
    }

    public function comments(Product $product)
    {
        return view('dashboard.product.comments', compact('product'));
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
        // $agents = Agent::all();
        $sizes = Size::all();
        $colors = Color::all();
        $weights = Weight::all();
        $product = Product::findOrFail($id);
        return view('dashboard.product.edit', compact('product', 'categories', 'colors', 'sizes', 'weights'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ProductRequest $request
     * @param int $id
     * @return Response
     */
     function RemoveFalseButNotZero($value) {
      return ($value || is_numeric($value));
    }

    public function update(ProductRequest $request, $id)
    {
        $request->quantity = array_values(array_diff(array_map('trim', request('quantity') ), array(null)));
        $size_quantity = [];
        $quantitycalc = 0;

        foreach($request->size as $key => $val ){
            $quantitycalc += $request->quantity[$key];
            $size_quantity[] = [
                'size' => $request->size[$key],
                'quantity' => $request->quantity[$key]
            ];

        }


        $product = Product::findOrFail($id);
        $product->category_id = $request->get('category');
        $product->name_ar = $request->get('name_ar');
        $product->name_en = $request->get('name_en');
        $product->desc_ar = $request->get('desc_ar');
        $product->desc_en = $request->get('desc_en');
        $product->weight_id = $request->get('weight');
        $product->price = $request->get('price');
        $product->code = $request->get('code');
        $product->quantity = $quantitycalc;
        $product->cost = $request->get('cost');
        $product->discount = $request->get('discount') ?? null;
        $product->discount_from = $request->get('discount_from') ?? null;
        $product->discount_to = $request->get('discount_to') ?? null;
        $product->display = $request->get('display');
        $product->deliverable = $request->get('deliverable');
        $product->featured = $request->get('featured');

        DB::table('size_products')->where('product_id', $id)->delete();
        foreach ($size_quantity as $index) {
            DB::table('size_products')->insert([
                'product_id' => $id,
                'size_id' => $index['size'],
                'quantity' => $index['quantity'],
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }

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
            $imagesName = Upload::uploadImages(request('images'),'products/' . $product->id);
        }
        if (isset($imagesName) && is_array($imagesName)) {
            foreach ($imagesName as $image) {
                DB::table('product_images')->insert(['product_id' => $product->id,'image' => $image]);
            }
        }
        $product->save();
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
