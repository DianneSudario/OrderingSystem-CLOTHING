<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/products', [App\Http\Controllers\ProductsController::class,'index']);
// Route::get('products', ['uses'=> 'ProductsController@index']) //LARAVEL7

// Route::get('/product/addToCart/{id}',[ProductsController::class, 'addProductToCart'])->name('AddToCartProduct'); //LARAVEL7

Route::get('product/addToCart/{id}', ['uses'=> 'App\Http\Controllers\ProductsController@addProductToCart', 'as'=> 'AddToCartProduct']); //LARAVEL7

// Route::get('/addToCart/{id}', 'ProductController@getaddProductToCart'); 
// Route::get('/product/addToCart/{id}', 'ProductsController@addProductToCart')->name('AddToCartProduct');

