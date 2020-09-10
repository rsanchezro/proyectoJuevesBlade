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


Route::get('/', 'PrimerControlador@raiz')->name('entrada');

Route::match(['get', 'post'], '/hola/{persona?}', 'PrimerControlador@hola');

Route::get('/parametros/{param_1}/{param_2}/{param_3}', 'PrimerControlador@pruebaParametros');

