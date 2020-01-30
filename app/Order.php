<?php

namespace App;
use DB;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public static function confirm($order) {
        
        //dd($order);
        DB::table('orders')->insert($order);

    }
}