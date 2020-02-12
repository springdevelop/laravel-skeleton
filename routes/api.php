<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group(['namespace' => 'Api'], function () {


        Route::get('donates', 'DonateController@index');
        Route::get('donates/{id}', 'DonateController@show')->where('id','[0-9]+');
        Route::post('donates', 'DonateController@store');
        Route::put('donates/{id}', 'DonateController@update')->where('id','[0-9]+');
        Route::delete('donates/{id}', 'DonateController@destroy');

        Route::get('pays', 'PayController@index');
        Route::get('pays/{id}', 'PayController@show')->where('id','[0-9]+');
        Route::post('pays', 'PayController@store');
        Route::put('pays/{id}', 'PayController@update')->where('id','[0-9]+');
        Route::delete('pays/{id}', 'PayController@destroy');

        Route::get('foundings', 'FoundingController@index');
        Route::get('foundings/{id}', 'FoundingController@show')->where('id','[0-9]+');
        Route::post('foundings', 'FoundingController@store');
        Route::put('foundings/{id}', 'FoundingController@update')->where('id','[0-9]+');
        Route::delete('foundings/{id}', 'FoundingController@destroy');

        Route::get('menus', 'MenuController@index');
        Route::get('menus/{id}', 'MenuController@show')->where('id','[0-9]+');
        Route::post('menus', 'MenuController@store');
        Route::put('menus/{id}', 'MenuController@update')->where('id','[0-9]+');
        Route::delete('menus/{id}', 'MenuController@destroy');
        
        Route::get('custom-html', 'CustomHtmlController@index');
        Route::get('custom-html/{id}', 'MenuController@show')->where('id','[0-9]+');
});
