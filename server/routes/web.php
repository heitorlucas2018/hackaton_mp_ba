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

Route::post('Instituicoes/insert','ControllerInstituicoes@insert');

//Login 
Route::get('login', function () {
    return view('login');
});

//Dashboard
Route::get('dashboard', function () {
    return view('dashboard');
});

//Mapa
Route::get('map', function () {
    return view('map');
});

//Rede Proteção
Route::get('rede_protecao', function () {
    return view('rede_protecao');
});

//Instituição 
Route::get('institution', function () {
    return view('institution');
});

//About 
Route::get('about', function () {
    return view('about');
});

//Doubt 
Route::get('doubt', function () {
    return view('dashboard');
});

//Usuario 
Route::get('user', function () {
    return view('user');
});
