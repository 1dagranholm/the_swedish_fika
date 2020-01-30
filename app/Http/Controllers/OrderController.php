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

        $product = $request;
        $total = 0;
        foreach ($product['product'] as $products) {

            if($products['count'] > 0) {
                $total = ($total + ($products['price'] * $products['count']));
            }
        }

        return view('cart', [
            'product' => $request->all(),
            'total' => $total
        ]);
    }

    public function confirm(Request $request) {

        $products = $request->all();
        //dd($products);
        Order::confirm($products);

        return view('confirm');
    }
}