<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
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
// dd($product['product']);
        return view('cart', [
            'product' => $request->all(),
            'total' => $total
        ]);
    }

    public function confirm(Request $request) {
        $product = $request;

        
        
        foreach($product['product'] as $products) { 
            // dd($product["'id'"]);    
                $id = $products["'id'"];
            $count = $products["'count'"];

            $order = [
                'product_id' => $id,
                'amount' => $count
            ];
            
        }
        $product = $request->all();
        Order::confirm($order);

        return view('confirm');
    }
}