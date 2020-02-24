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

Route::get('/login', "AuthController@index")->name('login');
Route::post('/postlogin', "AuthController@login");
Route::get('/logout', "AuthController@logout");

Route::get('/index', "MahasiswaController@index");
Route::get('/proker', "ProkerController@index");

Route::group(['middleware' => 'auth'], function(){
	Route::get('/', "AdminMahasiswaController@index");
	Route::get('/admin', "AdminMahasiswaController@index");
	Route::get('/admin_proker', "AdminProkerController@index");
	Route::get('/create', "AdminMahasiswaController@create");
	Route::get('/admin/{mahasiswa}', "AdminMahasiswaController@show");
	Route::post('/admin', "AdminMahasiswaController@store");
	Route::delete('/admin/{mahasiswa}', "AdminMahasiswaController@destroy");
	Route::delete('/admin_proker/{proker}', "AdminProkerController@destroy");
	Route::get('/edit/{mahasiswa}', "AdminMahasiswaController@edit");
	Route::patch('/admin/{mahasiswa}', "AdminMahasiswaController@update");
});


// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/', function () {	
//     return view('index2');
// });

// Route::get('/about', function () {
//     return view('about');
// });
