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
            $product = $request;
            $total = 0;
            foreach ($product['product'] as $products) {
                if($products['count'] > 0){
                $total = ($total + ($products['price'] * $products['count']));
                }
            }

            return view('cart', [
                'product' => $request->all(),
                'total' => $total  
            ]);
        }
}