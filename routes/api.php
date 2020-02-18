<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use App\Product;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/product/{product}', function(Product $product) {

    return $product;
});
Route::apiResource('/product', 'ProductController');

Route::get('/products', 'ProductController@show');
Route::get('/productsapi', 'ProductController@showAllProductsApi');
Route::get('/products/{products}', 'ProductController@showProductApi');
