<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'Reciclar','middleware' => 'auth'], function() {

	Route::get('/Tec', function () {
    	return view('recycle.home');
	});
	Route::get('/Perfil', function () {
    	return view('recycle.perfil');
	});
	Route::get('/Celulares', function () {
    	return view('recycle.celulares');
	});
	Route::get('/Iphone/P', 'Reciclar\Celular@Iphone_P');

});

