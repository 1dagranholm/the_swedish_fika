<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;


class ProductController extends Controller {

    public function show() {
        $products = Product::show();
        return view('products', [
            'product' => $products]);
    }

    public function showAllProductsApi(Product $products) {
        $products = Product::show();
        return $products;
    }
    
    public function showProductApi(Product $products) {
        return $products;
    }
}