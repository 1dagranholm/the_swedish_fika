<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use DB;

class OrderController extends Controller {

        public function show() {
        $order = DB::table('orders')->get();

        return view('orders', [
            'order' => $order
        ]);
    }

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