<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\VarDumper;

class ProductController extends Controller {

        public function show() {
        $products = Product::show();
        return view('products', [
            'product' => $products
        ]);
        }

        public function cart(Request $request) {

            return view('cart', [
                'product' => $request->all()
            ]);
        }
}