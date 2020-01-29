<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function show() {

        $method = Request::method();

        if($method) {
            
        } else {
            echo "Finns inget att visa";
        }



        $products = Product::show();
        return view('products', [
            'product' => $products
        ]);
}