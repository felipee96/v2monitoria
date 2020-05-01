<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


//CREAR VISTAS
Route::get('/modAdministrador', function () {
    return view('modAdministrador');
})->name('modAdministrador');



Route::get('/modMonitor', function () {
    return view('modMonitor');
})->name('modMonitor');

Route::get('/registroMonitor', function () {
    return view('administrador.registroMonitor');
});
Route::get('/controlSala', function () {
    return view('controlSala');
});
Route::get('/prueba', function() {
    return view('prueba');
})->name('prueba');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
