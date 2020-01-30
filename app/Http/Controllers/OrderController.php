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

        $tokenArray = $request;
        $product = $tokenArray['product'];
        
        foreach($product as $products) {
            $id = $products["'id'"];
            $count = $products["'count'"];
            
            $order = [
                'product_id' => $id,
                'amount' => $count
            ];
            Order::confirm($order);
        }

        
        

        return view('confirm');
    }
}