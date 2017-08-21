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
Route::get('/logo', function () {
    return view('logo');
});


Route::group(['prefix' => 'Reciclar','middleware' => 'auth'], function() {
	

	Route::get('/Tec', ['uses' => 'Reciclar\Celular@index', 'as' => '/Tec']);
	Route::get('/Perfil', ['uses' => 'Auth\Perfil@index', 'as' => '/Perfil']);
	Route::get('/Celulares', function () {
    	return view('recycle.celulares.celulares');
	});
	Route::get('/iPads&Tablets', function () {
    	return view('recycle.ipads_y_tablets.tabletas');
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

	Route::get('/iPad/P', 'Reciclar\iyt@iPad_P');
	Route::get('/Samsung_T/P', 'Reciclar\iyt@Samsung_P');
	//Lista Marcas End

	//Formulario de reclamos
	Route::get('/P/{cod_produc}', 'Reciclar\Celular@P_Form');
	Route::get('/P/{cod_produc}/{memoria}', 'Reciclar\Celular@P_Form_Sub');
	//Formulario de reclamos End

	//Guardado de solicitud reclamos
	Route::post('/Solici', 'Reciclar\Celular@solicitud');
	//Guardado de solicitud reclamos End

	//Solicitudes
	Route::get('/Solicitudes', 'Reciclar\Solicitud@index');
	//Solicitudes End
	Route::get('/Cancelar/{id}', 'Reciclar\Solicitud@destroy');
	//Borrar Solicitud

	//Borrar Solicitud End

	//Actualizar Perfil
	Route::post('/Actualizar_P', 'Auth\Perfil@actualizar_p');
	//Actualizar Perfil End

	//Despues de enviar solicitud
	Route::get('/Aceptado/{data}', ['uses' => 'Reciclar\Celular@index_aceptado', 'as' => '/Aceptado']);
	//Despues de enviar solicitud End

	//Contacto
	Route::get('/Contacto', ['uses' => 'Contacto@index', 'as' => '/Contacto']);
	Route::post('/Contacto_mensaje', ['uses' => 'Contacto@contacto_mensaje', 'as' => '/Contacto_mensaje']);
	Route::get('/Contacto/MensajeEnviado', ['uses' => 'Contacto@contacto_enviado', 'as' => '/Contacto/MensajeEnviado']);
	//Contacto End

	//Tienda
	Route::get('/Tienda', ['uses' => 'Tienda@index', 'as' => '/Tienda']);
	//EndTienda

	//SobreNosotros
	Route::get('/SobreNosotros', ['uses' => 'Tienda@aboutass', 'as' => '/SobreNosotros']);
	//EndSobreNosotros

	
});

Route::group(['prefix' => '','middleware' => 'auth'], function() {
	Route::group(['prefix' => '','middleware' => 'admin'], function() {

		Route::get('/admin845967', ['uses' => 'Admin@index', 'as' => '/admin845967']);
		Route::get('/admin845967/products', ['uses' => 'Admin@products', 'as' => '/admin845967/products']);
		Route::get('/admin845967/categorias', ['uses' => 'Admin@categorias', 'as' => '/admin845967/categorias']);

		Route::get('/admin845967/agregar_products', ['uses' => 'Admin@create_products', 'as' => '/admin845967/agregar_products']);
		Route::get('/admin845967/agregar_categorias', ['uses' => 'Admin@create_categorias']);

		Route::get('/admin845967/products/activar/{id}', ['uses' => 'Admin@products_activar']);
		Route::get('/admin845967/products/desactivar/{id}', ['uses' => 'Admin@products_desactivar']);
		Route::get('/admin845967/products/activos', ['uses' => 'Admin@products_activos']);
		Route::get('/admin845967/products/inactivos', ['uses' => 'Admin@products_inactivos']);
		Route::get('/admin845967/categorias/activos', ['uses' => 'Admin@categorias_activos']);
		Route::get('/admin845967/categorias/inactivos', ['uses' => 'Admin@categorias_inactivos']);

		Route::post('/admin845967/agregar_products/15898', ['uses' => 'Admin@create_products_form', 'as' => '/admin845967/agregar_products/15898']);
		Route::post('/admin845967/agregar_categorias/15898', ['uses' => 'Admin@create_categorias_form']);

		Route::get('/admin845967/usuarios', ['uses' => 'Admin@usuarios']);
		Route::get('/admin845967/usuario/activar/{id}', ['uses' => 'Admin@usuario_activar']);
		Route::get('/admin845967/usuario/desactivar/{id}', ['uses' => 'Admin@usuario_desactivar']);	
		Route::get('/admin845967/usuarios/activos', ['uses' => 'Admin@usuarios_activos']);	
		Route::get('/admin845967/usuarios/inactivos', ['uses' => 'Admin@usuarios_inactivos']);	

		Route::get('/admin845967/Solicitudes_A', ['uses' => 'Admin@solicitudes_A']);
		Route::get('/admin845967/Solicitudes_P', ['uses' => 'Admin@solicitudes_P']);
		Route::get('/admin845967/Solicitudes_I', ['uses' => 'Admin@solicitudes_I']);
		Route::get('/admin845967/Solicitudes_T', ['uses' => 'Admin@solicitudes_T']);
		Route::get('/admin845967/Solicitudes_Editar/{id}', ['uses' => 'Admin@solicitudes_Editar']);
		Route::post('/admin845967/Solicitudes_Editar/{id}', ['uses' => 'Admin@solicitudes_Editar_post']);		

		Route::get('/admin845967/agregar_turno', ['uses' => 'Admin@agregar_turno']);
		Route::post('/admin845967/agregar_turno', ['uses' => 'Admin@agregar_turno_post']);	

	});
});
Route::get('social/{provider?}', 'SocialController@getSocialAuth');
Route::get('callback/{provider?}', 'SocialController@getSocialAuthCallback');

