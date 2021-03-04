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

Route::group(['namespace'=>'App\Http\Controllers\Site'],function() {
    Route::get('/', 'HomeController@index');
    Route::get('products', 'CategoryController@index');
    Route::get('products/{slug}', 'CategoryController@show');
    Route::get('receipts', 'ReceiptsController@index');
    Route::get('about', 'AboutController@index');
    Route::get('contact', 'ContactController@index');
    Route::post('contact', 'ContactController@contact_form');
});