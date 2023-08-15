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
Route::get('/smartphones/{smartphone}', 'ProductsController@showSmartphone')->name('product.showSmartphone');
Route::get('/phones/{phone}', 'ProductsController@showPhone')->name('product.showPhone');
Route::get('/tablets/{tablet}', 'ProductsController@showTablet')->name('product.showTablet');
Route::get('/smartwatches/{smartwatch}', 'ProductsController@showSmartwatch')->name('product.showSmartwatch');
