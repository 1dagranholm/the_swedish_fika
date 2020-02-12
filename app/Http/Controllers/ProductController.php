<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;


class ProductController extends Controller {

    public function show(Product $products) {
        $products = Product::show();
        // return view('products', [
        //     'product' => $products]);
        return $products;
        
    }
}