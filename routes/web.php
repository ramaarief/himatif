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

Route::get('/index', "MahasiswaController@index");

Route::post('/postregister', "AuthController@store");
Route::get('/login', "AuthController@index")->name('login');
Route::post('/postlogin', "AuthController@login");
Route::get('/logout', "AuthController@logout");

Route::group(['middleware' => 'auth'], function(){

	Route::get('/', "AdminMahasiswaController@index");
	Route::get('/create', "AdminMahasiswaController@create");
	Route::post('/admin', "AdminMahasiswaController@store");
	Route::get('/admin/{mahasiswa}', "AdminMahasiswaController@show");
	Route::get('/edit/{mahasiswa}', "AdminMahasiswaController@edit");
	Route::patch('/admin/{mahasiswa}', "AdminMahasiswaController@update");
	Route::delete('/admin/{mahasiswa}', "AdminMahasiswaController@destroy");
	Route::get('/export_excel', "AdminMahasiswaController@export_excel");
	Route::get('/cetak_pdf', "AdminMahasiswaController@cetak_pdf");

	Route::get('/admin_proker', "AdminProkerController@index");
	Route::get('/admin_proker/{proker}', "AdminProkerController@show");
	Route::get('/edit_proker/{proker}', "AdminProkerController@edit");
	Route::patch('/admin_proker/{proker}', "AdminProkerController@update");
	Route::delete('/admin_proker/{proker}', "AdminProkerController@destroy");
	
	
});
