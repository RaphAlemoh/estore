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


Route::get('/', 'CartController@index')->name('cart.index');

Route::get('/store', 'StoreController@index')->name('store.index');
Route::get('/store/{product}', 'StoreController@show')->name('store.show');


Route::get('/add-to-cart/{id}', 'ProductController@addToCart')->name('product.addcart');

Route::get('/reduce-one/{id}', 'ProductController@getReduceByOne')->name('users.reduceByOne');

Route::get('/reduce-item/{id}', 'ProductController@getRemoveItem')->name('users.removeItem');

Route::get('/shopping-cart', 'ProductController@getCart')->name('products.shoppingCart');

Route::get('/checkout', 'ProductController@getCheckout')->name('checkout');

Route::post('/checkout', 'ProductController@postCheckout')->name('checkout');

Route::match(['get', 'post'], '/admin', 'AdminController@login')->name('admin.login');

Route::get('/user-profile', 'ProductController@getProfile')->name('users.profile');

Route::get('/admin/logout', 'AdminController@logout')->name('admin.logout');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth', 'checkRole:admin']], function () {
    Route::get('/admin/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
    Route::get('/admin/settings', 'AdminController@settings')->name('admin.settings');
    Route::get('/admin/check-pwd', 'AdminController@checkPwd')->name('admin.checkPwd');
    Route::match(['get', 'post'], '/admin/update-pwd', 'AdminController@updatePwd')->name('admin.updatePwd');
    
	Route::resource('categories','CategoryController');
	Route::resource('products','ProductController');


});


Route::group(['middleware' => ['auth', 'checkRole:staff,admin']], function () {
    Route::get('/admin/dashboard', 'AdminController@dashboard')->name('admin.dashboard');

});


Route::group(['middleware' => ['auth', 'checkRole:staff,admin,customer']], function () {


});

Route::get('/notify', 'OrderController@sendNotification');

Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');

Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');

Route::post('/payment/webhook', 'PaymentController@handleWebHook');



