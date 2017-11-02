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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/generate/short-url/{id?}', 'ShortUrlController@generate_hexcode');

Route::post('/generate/delete-short-url', 'ShortUrlController@delete_url');


// sdk
Route::get('/v1/url-shortener-sdk/{access_token}', 'SDKController@shortener_url');

Route::get('/generate/kpa-token', 'SDKController@generata_kpa_token');

Route::get('/js/sdk/v1/kpa-jsdk.js', 'SDKController@kpa_jssdk');
