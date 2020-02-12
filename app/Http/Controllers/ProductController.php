<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;


class ProductController extends Controller {

    public function show() {
        $products = Product::show();
        return view('products', [
            'product' => $products
        ]);
    }

    public function showAllApi() {
        $products = Product::show();
        return response()->json($products, 200);
    }
}