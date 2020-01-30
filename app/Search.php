<?php

namespace App;
use DB;

use Illuminate\Database\Eloquent\Model;

class Search extends Model
{
    public static function searchResult($searchInput) {
        
      $productName = DB::table('products')
      ->where('name', 'LIKE', '%'.$searchInput.'%');
  
      $productFlavor = DB::table('products')
      ->where('flavor', 'LIKE', '%'.$searchInput.'%');

      $productType = DB::table('products')
      ->where('type', 'LIKE', '%'.$searchInput.'%')
      ->union($productName)
      ->union($productFlavor)
      ->get();

      $productsArray = $productType;

      return $productsArray;

    }
}