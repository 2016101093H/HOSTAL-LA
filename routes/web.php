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

Route::get('/LOSANGELES_introduccion', function () {
    return view('introduccion');
});
Route::get('/LOSANGELES_cuartos', function () {
    return view('cuartos');
});
Route::get('/LOSANGELES_cuartosmatrimonial', function () {
    return view('cuartos_matrimonial');
});
Route::get('/LOSANGELES_cuartosindividuales', function () {
    return view('cuartos_individuales');
});
Route::get('/LOSANGELES_cuartosdobles', function () {
    return view('cuartos_dobles');
});
Route::get('/LOSANGELES_cuartostriples', function () {
    return view('cuartos_triples');
});
Route::get('/LOSANGELES_galeria', function () {
    return view('galeria');
});
Route::get('/LOSANGELES_contactanos', function () {
    return view('contactanos');
});
Route::get('/LOSANGELES_cliente', function () {
    return view('cliente');
});
Route::get('/LOSANGELES_reserva', function () {
        return view('reserva');
    });
Route::get('/LOSANGELES_reserva','Api\ReservaController@create');

Route::post('/LOSANGELES_reserva', 'Api\ReservaController@store');
Route::get('/LOSANGELES_cliente','Api\ClienteController@create');

Route::post('/LOSANGELES_cliente', 'Api\ClienteController@store');
Route::resource('LOSANGELES_reserva', 'Api\ReservaController');


//Aumentado
Route::get('/modificar', 'Api\ReservaController@index1');

Route::get('/mostrar/{slug}', 'Api\ReservaController@show');
Route::post('/mostrar/{slug?}/edit', 'Api\ReservaController@edit');
Route::post('/mostrar/{slug?}/delete', 'Api\ReservaController@destroy');