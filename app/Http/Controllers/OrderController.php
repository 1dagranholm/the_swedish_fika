<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class OrderController extends Controller {

    public function cart(Request $request) {

        return view('cart', [
            'product' => $request->all()
        ]);
    }

    public function confirm(Request $request) {
        return view('confirm');
    }
    
}