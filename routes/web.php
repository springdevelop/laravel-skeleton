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
});
Route::get('/getlogin', function () {
    return view('auth.login');
});
Auth::routes();

Route::resource('donate', 'Web\DonateController')->middleware('auth');
Route::resource('founding', 'Web\FoundingController')->middleware('auth');
Route::resource('menu', 'Web\MenuController')->middleware('auth');
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
