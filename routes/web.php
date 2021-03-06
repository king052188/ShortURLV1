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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/encoding', 'SDKController@encoding');



Route::get('/testing32', 'SDKController@testing');

Route::get('/{hex_code?}', 'ShortUrlController@init');
