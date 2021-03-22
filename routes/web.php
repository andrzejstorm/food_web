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

    //Route to the main page of the restaurant
    Route::get('/', 'HomeController@index'); 
    
    //Routes for the Menu and dishes info/details/price 
    Route::get('cuisine', 'CuisineController@index');
    Route::get('cuisine/{slug}', 'CuisineController@show');

    //Routes for the wine list and wine info/price
    Route::get('winelist', 'WineListController@index');
    Route::get('winelist/{slug}', 'WinelistController@show');

    //Route to the list of blog receipts
    Route::get('cookbook', 'CookbookController@index');

    //Route to the feedback form
    Route::get('contact', 'ContactController@index');
    Route::post('contact', 'ContactController@contact_form');

    //Route for the purchase and checkout views

});