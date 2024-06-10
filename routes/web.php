<?php
use App\Http\Controllers\InfraestructuraController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/quienes-somos', function () {
    return view('quienes-somos');
});
Route::get('/mision-vision', function () {
    return view('mision-vision');
});
Route::get('/directorio', function () {
    return view('directorio');
});
Route::get('/historia', function () {
    return view('historia');
});
Route::get('/aliados', function () {
    return view('aliados');
});
Route::get('/que-hacemos', function () {
    return view('que-hacemos');
});
Route::get('/areas-demostrativas', function () {
    return view('infraestructura');
});
Route::get('/infraestructura', [InfraestructuraController::class, 'index']);


Route::get('/difusion', function () {
    return view('difusion');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/contacto', function () {
    return view('contacto');
});
Route::get('/sistemas', function () {
    return view('sistemas');
});
