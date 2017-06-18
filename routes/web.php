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

Route::get('/', 'VehiculoController@showAll');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('vehiculos', 'VehiculoController', ['only'=>['index', 'show']]);
Route::resource('fabricantes', 'FabricanteController');
Route::resource('fabricante.vehiculos','FabricanteVehiculoController', ['except' => ['show']]);