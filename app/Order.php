<?php

namespace App;
use DB;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public static function confirm($products) {
        
        foreach($products as $product) {
            $id = $product['id'];
            $count = $product['count'];

            $order = [
                'product_id' => $id,
                'count' => $count
            ];
        }

        DB::table('orders')->insert($order);
    }
}