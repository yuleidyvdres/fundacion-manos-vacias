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