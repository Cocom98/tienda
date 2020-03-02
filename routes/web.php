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

Route::get('/', function () {
    return view('home');
});


Route::get('Home', function(){
	return view('Home');
})->name('Home');

Route::get('/lacteos', 'ProductoController@index')->name('lacteos');
Route::get('/limpieza', 'LimpiezaController@index')->name('limpieza');
Route::get('/carnes', 'CarnesController@index')->name('carnes');
Route::get('/abarrotesgen', 'AbarrotesgenController@index')->name('abarrotesgen');
Route::get('/embotellados', 'EmbotelladosController@index')->name('embotellados');