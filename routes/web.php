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

Route::get('/', 'WelcomeController@home');

Route::get('/orders', 'OrderController@show');
Route::post('/search', 'SearchController@search');


Route::get('/products', 'ProductController@showAll');
Route::post('/cart', 'OrderController@cart');

Route::post('/confirm', 'OrderController@confirm');