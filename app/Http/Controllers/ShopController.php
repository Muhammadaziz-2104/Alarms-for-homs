<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::orderBy('created_at','DESC')->paginate(12);
        return view('products.shop',['products'=>$products]);
    }

    public function show(Product $product)
    {
//        dd($product);
        $products = Product::where('slug', '!=', $product)->inRandomOrder('id')->get()->take(3);
//        dd($products);
        return view('products.product',['product'=>$product, 'products' => $products]);
    }

}
