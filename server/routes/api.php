<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'v1', 'middleware' => 'api'], function() {

    Route::post('login', 'ControllerAuth@auth');

    Route::resource('user','ControllerUser',['only' => ['index', 'store','show', 'update', 'destroy']]);
    Route::resource('instituicoes','ControllerInstituicoes',['only' => ['index', 'store', 'show', 'update', 'destroy']]);
    Route::resource('rede','ControllerRede',['only' => ['index', 'store', 'show', 'update', 'destroy']]);

    /*Rede
        Route::post('Rede/insert','ControllerRede@insert');
        Route::put('Rede/{id}/Update','ControllerRede@update');
    **/

    //Instituições
        Route::post('Instituicoes/insert','ControllerInstituicoes@insert');

});
