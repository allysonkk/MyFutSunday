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

Route::post('player', 'PlayerController@register');
Route::get('players', 'PlayerController@players');

Route::group(['middleware' => 'auth:api'], function() {
    
    Route::get('logout', 'AuthController@logout');
    
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});
