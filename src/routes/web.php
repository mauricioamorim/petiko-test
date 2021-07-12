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
    $view_content = "sales.home";
    return view('sales.base', compact('view_content'));
})->name("sales.home");
Route::get('/create', 'SalesController@create')->name("sales.create");
Route::post('/store', 'SalesController@store')->name("sales.store");
Route::get('/list', 'SalesController@index')->name("sales.list");
Route::get('/zipcode', 'ZipcodeController@show')->name('zipcode.show');
