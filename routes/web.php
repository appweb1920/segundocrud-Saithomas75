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

Route::get('/', 'PiezaController@index');
Route::get('/Ingresar', 'PiezaController@create');
Route::post('/Ingresar/Subir', 'PiezaController@store');
Route::get('/Editar/{id}',  "PiezaController@edit");
Route::post('/Actualizar', "PiezaController@update");

