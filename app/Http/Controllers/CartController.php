<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CartController extends Controller {

        public function show() {

        return view('cart');
    }
}