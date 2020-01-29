<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SearchController extends Controller
{
    // 
    public function search(Request $request) {
        
        //dd($request->all());                         //to check all the datas dumped from the form
        $searchInput = $request->searchInput;             //if your want to get single element,someName in this case   
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

        return view('search', [
            'product' => $productsArray
        ]);




        
    }
}
