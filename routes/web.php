<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('products', function () {
//     return view('products', 'ProductController@show');
// });

Route::get('/products', 'ProductController@show');
Route::get('/orders', 'OrderController@show');
Route::get('/cart', 'CartController@show');