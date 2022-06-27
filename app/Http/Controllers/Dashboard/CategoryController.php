<?php

namespace App\Http\Controllers\Dashboard;

use App\Helper\Upload;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\CategoryRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $categories = Category::all();

        return view('dashboard.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('dashboard.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CategoryRequest $request
     * @return void
     */
    public function store(CategoryRequest $request)
    {
        $next_id = DB::select("SHOW TABLE STATUS LIKE 'categories'");
        $next_id = $next_id[0]->Auto_increment;
        $imageName = Upload::uploadImage($request->file('image'), 'categories/' . $next_id);
        DB::table('categories')->insert([
            'name_ar' => $request->get('name_ar'),
            'name_en' => $request->get('name_en'),
            'image' => $imageName,
            'display' => $request->get('display'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        return redirect()->back()->with('message', __('messages.categoryAddedSuccessfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('dashboard.category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('dashboard.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CategoryRequest $request
     * @param int $id
     * @return void
     */
    public function update(CategoryRequest $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->name_ar = $request->get('name_ar');
        $category->name_en = $request->get('name_en');
        $category->display = $request->get('display');
        if ($request->file('image')) {
            $category->image = Upload::uploadImage($request->file('image'),
                'categories/' . $category->id, $category['image']);
        }
        $category->save();
        return redirect()->back()->with('message', __('messages.categoryUpdatedSuccessfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        if ($category->products->count() == 0) {
            Upload::deleteDirectory('categories/' . $category->id);
            $category->delete();
            return redirect()->back()->with('message', __('messages.categoryDeletedSuccessfully'));
        } else {
            return redirect()->back()->with('error', __('messages.categoryHasProducts'));
        }
    }

    /**
     * Update display status of the specified resource in storage.
     *
     * @return void
     */
    function switch () {
            $category = Category::findOrFail(request('id'));
            $category->display = request('display');
            $category->save();
    }

    /**
     * Get products of category display status of the specified resource in storage.
     *
     * @param $id
     * @return void
     */
    public function products(Request $request)
    {
        $products = Product::where([
            ['category_id', $request->get('id')],
            ['display', 1],
        ])->get([
            'id',
            "name_" . app()->getLocale() . " as name",
        ]);

        if (!$products) {
            $products = [];
        }

        return response()->json($products, 200);
    }
}
