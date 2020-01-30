<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;


class OrderController extends Controller {

    public function cart(Request $request) {

        return view('cart', [
            'product' => $request->all()
        ]);
    }

    public function confirm(Request $request) {

        $products = $request->all();
        Order::confirm($products);

        return view('confirm');
    }
    
}