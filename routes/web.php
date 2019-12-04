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
Route::resource('contacto','ContactoController');
Route::resource('libro','LibroController');
Route::resource('categoria','CategoriaController');

Auth::routes();
/* Rutas para todas las vitas */
Route::get('/', 'Rutas@index');
Route::get('librosGeneral', 'Rutas@librosGeneral');
Route::get('contactosPanel','ContactoController@panelC');

/* Rutas para todas las vitas admin*/
Route::get('panelAdmin', 'Rutas@panel')->name('panelAdmin');
