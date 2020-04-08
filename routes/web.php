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


Route::get('/', 'ProductController@index')->name('products.index');

Route::get('/add-to-cart/{id}', 'ProductController@addToCart')->name('product.addcart');

Route::get('/shopping-cart', 'ProductController@getCart')->name('products.shoppingCart');

Route::get('/checkout', 'ProductController@getCheckout')->name('checkout');
Route::post('/checkout', 'ProductController@postCheckout')->name('checkout');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


