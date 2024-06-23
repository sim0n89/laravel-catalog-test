<?php

namespace App\Http\Controllers;

use App\Filters\ProductFilter;
use App\Models\Product;
use App\Models\ProductProperty;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(ProductFilter $requst){
        $products = Product::filter($requst)->paginate(40);
        return response()->json(['products' => $products]);
    }

    public function welcome() {
        $first = ProductProperty::first();
        return view('welcome')->with(['first' => $first]);
    }
}
