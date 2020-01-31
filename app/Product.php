<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    public static function show() {
        $products = DB::table('products')->get();
        return $products;
    }
}