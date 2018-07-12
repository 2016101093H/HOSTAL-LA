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
Route::get('/LOSANGELES_adminportal', function () {
    return view('admin1home');
});
Route::get('/LOSANGELES_adminportal_cuenta', function () {
    return view('admin2cuenta');
});
Route::get('/LOSANGELES_adminportal_reserva', function () {
    return view('admin3reserva');
});
Route::get('/LOSANGELES_adminportal_habitaciones', function () {
    return view('admin4habitaciones');
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