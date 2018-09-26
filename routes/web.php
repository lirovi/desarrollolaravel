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

Route::get('/', 'pagecontroller@inicio');

Route::get('Bienvenido', function () {
    return "Hola!";
});

Route::get('fotos/{numero?}', function ($numero='Sin numero') {
    return "Estas en la galeria de fotos : ".$numero;
})->where('numero','[0-9]+');

Route::get('cursos', function(){
   return view('inicio');
});

Route::resource('entrena', 'Entrenador');
