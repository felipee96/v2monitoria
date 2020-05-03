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


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');




//CREAR VISTAS PARA FORMULARIOS
Route::get('/registro','RegistroMonitorController@index');
Route::resource('/registro', 'RegistroMonitorController');

Route::get('/fallas','ReportarFallaController@index');
Route::resource('/fallas', 'ReportarFallaController');

Route::get('/perdidas','PerdidaController@index');
Route::resource('/perdidas', 'PerdidaController');

Route::get('/control','RegistroEstudianteController@index');
Route::resource('/control', 'RegistroEstudianteController');

Route::get('/Ver_Estudiantes','RegistroEstudianteController@verEstudiantes');

Route::get('/Ver_Monitores','RegistromonitorController@verMonitores');

Route::get('/Ver_Fallas','ReportarFallaController@verFallas');

Route::get('/Ver_Perdidas','PerdidaController@verPerdidas');
