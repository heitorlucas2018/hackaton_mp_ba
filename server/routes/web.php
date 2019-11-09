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
    return view('welcome');
});


//Rede
Route::post('Rede/insert','ControllerRede@insert');
Route::put('Rede/{id}/Update','ControllerRede@update');

//Instituições
Route::post('Instituicoes/insert','ControllerInstituicoes@insert');

