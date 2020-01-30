<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', 'ProductController@show');
Route::post('/cart', 'OrderController@cart');
Route::post('/confirm', 'OrderController@confirm');