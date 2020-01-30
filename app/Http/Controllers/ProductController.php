<?php

namespace App\Http\Controllers;

use App\Product;

class ProductController extends Controller {

    public function show() {
        $products = Product::show();
        return view('products', [
            'product' => $products
        ]);
        }
}