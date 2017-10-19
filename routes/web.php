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

Route::get('/', [
	'uses' => 'HomeController@urgencias',
	'as' => "homepage"
]);

Auth::routes();
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'Perfil'], function(){
	Route::resource('Niño','NinoController');
//------------------- Formulario Ninos ---------------------
//-----------------------------------------------------------
	Route::get('Niño/create-cancer',[
				'uses'=>'NinoController@create_cancer',
				'as'=>'Niño.create_cancer'
	]);

	Route::get('Niño/create-contacto',[
				'uses'=>'NinoController@create_contacto',
				'as'=>'Niño.create_contacto'
	]);

	Route::get('Niño/create-donacion',[
				'uses'=>'NinoController@create_donacion',
				'as'=>'Niño.create_donacion'
	]);
//-------------------------------------------------------
	Route::post('Niño/store-cancer',[
				'uses'=>'NinoController@store_cancer',
				'as'=>'Niño.store_cancer'
    ]);	
    Route::post('Niño/store-contacto',[
				'uses'=>'NinoController@store_contacto',
				'as'=>'Niño.store_contacto'
    ]);	
    Route::post('Niño/store-donacion',[
				'uses'=>'NinoController@store_donacion',
				'as'=>'Niño.store_donacion'
    ]);	
    //--------------------------------------------------  
});//fin grupo rutas ninno

Route::group(['prefix' => 'Donacion'], function(){
 //----------------Donacion Parte publica -----------
    Route::get('Niño/donacion-publica',[
				'uses'=>'NinoController@donacion_publica',
				'as'=>'Niño.donacion_publica'
	]);
	 Route::get('Niño/Perfil-publico',[
				'uses'=>'NinoController@perfil_publico',
				'as'=>'Niño.perfil_publico'
	]);
});

Route::post('representante/auth', [
	'uses' => 'RepresentanteController@authentificate',
	'as'   => 'representante.auth'
]);
Route::get('representante/logout', [
	'uses' => 'RepresentanteController@logout',
	'as'   => 'representante.logout'
]);
Route::resource('representante', 'RepresentanteController');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function(){

	Route::group(['prefix' => 'tipo-cancer'], function(){

		Route::resource('cancer','CancerController');
		Route::get('cancer/{id}/destroy',[
				'uses'=>'CancerController@destroy',
				'as'=>'cancer.destroy'
		]);	

	});

	Route::get('/contacto/{id}/destroy', [
		'uses' => 'ContactoController@destroy',
		'as'   => 'admin.contacto.destroy'
	]);
	Route::post('/contacto/search', [
		'uses' => 'ContactoController@search',
		'as'   => 'admin.contacto.search'
	]);
	Route::resource('contacto', 'ContactoController');

	Route::get('/donacion/{id}/destroy', [
		'uses' => 'DonacionesController@destroy',
		'as'   => 'admin.donacion.destroy'
	]);
	Route::post('/donacion/search', [
		'uses' => 'DonacionesController@search',
		'as'   => 'admin.donaciones.search'
	]);
	Route::resource('donaciones', 'DonacionesController');

	Route::get('/usuario/{id}/destroy', [
		'uses' => 'UsuariosController@destroy',
		'as'   => 'admin.usuarios.destroy'
	]);
	Route::post('/usuarios/search', [
		'uses' => 'UsuariosController@search',
		'as'   => 'admin.usuarios.search'
	]);
	Route::resource('usuarios', 'UsuariosController');
});