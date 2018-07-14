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

Route::get('/LOSANGELES', function () {
    return view('portal');
});
Route::get('/LOSANGELES_login', function () {
    return view('adminlogin');
});
Route::get('/LOSANGELES_introduccion', function () {
    return view('introduccion');
});
Route::get('/LOSANGELES_cuartos', function () {
    return view('cuartos-detalles');
});
Route::get('/LOSANGELES_cuartosdetalles', function () {
    return view('cuartos');
});
Route::get('/LOSANGELES_galeria', function () {
    return view('galeria');
});
Route::get('/LOSANGELES_contactanos', function () {
    return view('contactanos');
});

Route::get('/reserva','Api\ReservaController@create');

Route::post('/reserva', 'Api\ReservaController@store');
Route::get('/cliente','Api\ClienteController@create');

Route::post('/cliente', 'Api\ClienteController@store');

Route::resource('reserva', 'Api\ReservaController');