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
        $product = DB::table('products')->where('products.name', $searchInput)->get();
        $newarray = $product[0];
        






        return view('test', [
            'product' => $newarray
        ]);




        
    }
}
