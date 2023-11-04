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

Route::get('/index', 'ProductsController@index')->name('product.index');
Route::get('/smartphones', 'ProductsController@smartphone')->name('product.smartphone');
Route::get('/phones', 'ProductsController@phone')->name('product.phone');
Route::get('/tablets', 'ProductsController@tablet')->name('product.tablet');
Route::get('/smartwatches', 'ProductsController@smartwatch')->name('product.smartwatch');
Route::get('/smartphones/{product}', 'ProductsController@showSmartphone')->name('product.showSmartphone');
Route::get('/phones/{product}', 'ProductsController@showPhone')->name('product.showPhone');
Route::get('/tablets/{product}', 'ProductsController@showTablet')->name('product.showTablet');
Route::get('/smartwatches/{product}', 'ProductsController@showSmartwatch')->name('product.showSmartwatch');
Route::post('/basket/add/{id}', 'BasketController@add')
    ->where('id', '[0-9]+')
    ->name('basket.add');
Route::get('/basket/index', 'BasketController@index')->name('basket.index');
Route::get('/basket/checkout', 'BasketController@checkout')->name('basket.checkout');
Route::post('/basket/plus/{id}', 'BasketController@plus')
    ->where('id', '[0-9]+')
    ->name('basket.plus');
Route::post('/basket/minus/{id}', 'BasketController@minus')
    ->where('id', '[0-9]+')
    ->name('basket.minus');
Route::post('/basket/remove/{id}', 'BasketController@remove')
    ->where('id', '[0-9]+')
    ->name('basket.remove');
Route::post('/basket/clear', 'BasketController@clear')->name('basket.clear');
Route::get('/sell/index', 'SellController@index')->name('sell.index');
