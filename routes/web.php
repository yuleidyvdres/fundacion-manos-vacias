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

Route::get('/', function() {
    return view('homepage');
});

Auth::routes();
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('Niños', function () {
	return view('Niños')->with('title','Perfil del Niño');
});

Route::get('Niños2', function () {
	return view('Niños2')->with('title','Perfil del Niño');
});

Route::get('Donacion', function () {
	return view('Donacion')->with('title','Perfil del Niño');
});
Route::get('Donar-perfil', function () {
	return view('Donar-perfil-niño')->with('title','Perfil del Niño');
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