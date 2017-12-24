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
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/cart/{product}', 'CartController@cart')->name('cart');
//Admins
Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::resource('products', 'Admin\ProductController');
    Route::get('product/like/{product}', function (App\Models\Product $product) {
        $product->likeToggle();
        return redirect()->back();
    })->name('product.like');
    Route::get('product/booked/{product}', function (App\Models\Product $product) {
        $product->dislikeToggle();
        return redirect()->back();
    })->name('product.booked');
});