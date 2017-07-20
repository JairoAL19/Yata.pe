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
	//Lista Marcas
	Route::get('/Iphone/P', 'Reciclar\Celular@Iphone_P');	
	Route::get('/Samsung/P', 'Reciclar\Celular@Samsung_P');
	Route::get('/HTC/P', 'Reciclar\Celular@HTC_P');
	Route::get('/Huawei/P', 'Reciclar\Celular@Huawei_P');
	Route::get('/Motorola/P', 'Reciclar\Celular@Motorola_P');
	Route::get('/LG/P', 'Reciclar\Celular@LG_P');
	Route::get('/ZTE/P', 'Reciclar\Celular@ZTE_P');
	Route::get('/Azumi/P', 'Reciclar\Celular@Azumi_P');
	Route::get('/Nokia/P', 'Reciclar\Celular@Nokia_P');
	Route::get('/BlackBerry/P', 'Reciclar\Celular@Blackberry_P');
	//Lista Marcas End

	//Formulario de reclamos
	Route::get('/P/{cod_produc}', 'Reciclar\Celular@Iphone_P_Form');
	//Formulario de reclamos End

	//Guardado de solicitud reclamos
	Route::post('/Solici', 'Reciclar\Celular@solicitud');
	//Guardado de solicitud reclamos End
});

