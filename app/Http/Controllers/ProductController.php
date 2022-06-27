<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\Product;
use App\Models\SizeProducts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function show($id)
    {
        $product = Product::where('id',$id)->with(['reviews','images','size','color','weight'])->first();
        $products = Product::where('category_id', $product['category_id'])->inRandomOrder()->where('id', '!=', $product['id'])->take(3)->get();
        $favourit = auth('client')->user() ? Favorite::where('client_id', auth('client')->user()->id)->get() : '';
        $product->quantity = 0;
        return view('website.product.show', compact('product', 'products','favourit'));
    }

    public function reviews(Product $product)
    {
        return view('website.product.reviews', compact('product'));
    }

    public function getsizequantity(Request $request)
    {
        $quantity = SizeProducts::where('product_id',$request['product_id'])->where('size_id',$request['size_id'])->first()['quantity'];
        return response()->json([
            'success'=> $quantity
        ]);

    }
}
