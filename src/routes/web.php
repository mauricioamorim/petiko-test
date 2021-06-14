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
Route::post('/store', 'SalesController@store');
Route::get('/', 'SalesController@create');
Route::get('/zipcode', 'ZipcodeController@show')->name('zipcode.show');
