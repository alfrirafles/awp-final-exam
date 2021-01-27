<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CustomerController;

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

Route::get('/browse', '\App\Http\Controllers\ProductLineController@browse')->name('browse');
Route::get('/products/{category}', '\App\Http\Controllers\ProductController@list');
Route::get('/search/', '\App\Http\Controllers\ProductController@search')->name('search');
Route::get('/cart/', '\App\Http\Controllers\CartController@show')->name('display-cart');

Auth::routes();

Route::get('/profile', '\App\Http\Controllers\ProfileController@index')->name('profile');
Route::post('/profile/update', '\App\Http\Controllers\ProfileController@updateProfile')->name('profile.update');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home')
    ->middleware('auth');

Route::resource('products', ProductController::class)->middleware('auth');
Route::resource('orders', OrderController::class)->middleware('auth');
Route::resource('customers', CustomerController::class)->middleware('auth');



