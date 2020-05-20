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

//Nueva
Route::get('/Ver_ReporteFalla', function () {
    return view('administrador.reporteFalla');
});
Route::get('/Ver_ReportePerdida', function () {
    return view('administrador.reportePerdida');
});
//
Route::get('/Ver_Reportes','VerReportesController@index');

Route::get('/Ver_Estudiantes','RegistroEstudianteController@verEstudiantes');

Route::get('/Ver_Monitores','RegistromonitorController@verMonitores');

Route::get('/Ver_Fallas','ReportarFallaController@verFallas');

Route::get('/Ver_Perdidas','PerdidaController@verPerdidas');

Route::get('/Ver_Usuarios','HomeController@verUsuarios');

//RUTA PARA EDITAR
Route::get('/Editar-Monitor/{id}', 'RegistroMonitorController@edit');

Route::get('/Editar-Falla/{id}', 'ReportarFallaController@edit');

Route::get('/Editar-Perdida/{id}', 'PerdidaController@edit');

//RUTA PARA ACTUALIZAR
Route::put('/Actualizar-Monitor/{id}', 'RegistroMonitorController@update');

Route::put('/Actualizar-Falla/{id}', 'ReportarFallaController@update');

Route::put('/Actualizar-Perdida/{id}', 'PerdidaController@update');

//RUTA PARA ELIMINAR
Route::delete('/Eliminar-Monitor/{id}', 'RegistroMonitorController@destroy');