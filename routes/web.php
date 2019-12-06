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


Route::get('validacion', function () {
    return view('registrado');
});


Auth::routes();
/* Rutas para todas las vitas */
Route::get('/', 'Rutas@index');
Route::get('contactos','Rutas@contacto');
Route::get('librosGeneral', 'Rutas@librosGeneral');
Route::Resource('vercategoria','Rutas');


/* Rutas para todas las vitas admin*/

Route::group(['middleware' => ['role:administrador|moderador']], function () {
	Route::resource('panelAdmin','Panel');
  	Route::resource('contacto','ContactoController');
	Route::resource('libro','LibroController');
	
	Route::resource('usuario','UserController');
	Route::resource('categoria','CategoriaController');
	
	Route::get('intro','Panel@intro');
    
});
