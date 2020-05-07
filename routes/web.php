<?php

use Illuminate\Support\Facades\Route;



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
Route::resource('/registroMonitor', 'RegistroMonitorController');

Route::resource('/registroAdmin', 'RegistroAdministradorController');

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
