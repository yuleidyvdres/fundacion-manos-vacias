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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function() {
    return view('homepage');
});

Auth::routes();

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

Route::group(['prefix' => 'admin'], function(){

	Route::group(['prefix' => 'tipo-cancer'], function(){
		/*Route::get('agregar', function (){
			return view('admin.cancer.agregar')->with('title', 'Tipo de Cáncer');
		});*/
		
		Route::resource('cancer','CancerController');
		Route::get('cancer/{id}/destroy',[
				'uses'=>'CancerController@destroy',
				'as'=>'cancer.destroy'
		]);
	
		/*Route::get('listar', function(){
			return view('admin.cancer.listar')->with('title', 'Lista Tipo de Cáncer');
		});*/
	});

	Route::group(['prefix' => 'contacto'], function(){
		Route::get('agregar', function (){
			return view('admin.contacto.agregar')->with('title', 'Agregar Atributo Contacto');
		});
	
		Route::get('listar', function(){
			return view('admin.contacto.listar')->with('title', 'Lista Atributos Contacto');
		});
	});
	
	Route::group(['prefix' => 'donaciones'], function(){
		Route::get('agregar', function (){
			return view('admin.donaciones.agregar')->with('title', 'Agregar Donación');
		});

		Route::get('listar', function (){
			return view('admin.donaciones.listar')->with('title', 'Listado Donación');
		});
	});
	
	Route::group(['prefix' => 'usuarios'], function(){
		Route::get('agregar', function (){
			return view('admin.usuarios.agregar')->with('title', 'Agregar Usuario');
		});

		Route::get('listar', function (){
			return view('admin.usuarios.listar')->with('title', 'Listado Usuarios');
		});
	});
});