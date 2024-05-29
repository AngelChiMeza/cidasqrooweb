<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/nosotros', function () {
    return view('nosotros');
});
Route::get('/servicios', function () {
    return view('servicios');
});
Route::get('/cursos', function () {
    return view('cursos');
});
Route::get('/noticias', function () {
    return view('noticias');
});
Route::get('/contacto', function () {
    return view('contacto');
});

