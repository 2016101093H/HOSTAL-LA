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
<<<<<<< HEAD
Route::get('/hostal', function () {
    return view('hostal');
});
=======
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

>>>>>>> frankhc
