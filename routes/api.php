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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/
Route::middleware(['auth:api','cors'])->group(function (){
    Route::get('\users');
    //Route::get('/reserva','Api\ReservaController@create');
    //Route::post('/reserva','Api\ReservaController@store');
});