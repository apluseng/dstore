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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function(){
	return view('layouts.master');
});

// Route for Product
Route::get('product', function(){
	return view('pages.product');
});


// Route for cart
Route::get('cart', function(){
	return view('pages.cart');
});