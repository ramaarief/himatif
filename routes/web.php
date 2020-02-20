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

Route::group(['middleware' => 'auth'], function(){
	Route::get('/', "MahasiswaController@index");
	Route::get('/proker', "ProkerController@index");
	Route::get('/create', "MahasiswaController@create");
	Route::get('/{mahasiswa}', "MahasiswaController@show");
	Route::post('/', "MahasiswaController@store");
	Route::delete('/{mahasiswa}', "MahasiswaController@destroy");
	Route::delete('/proker/{proker}', "ProkerController@destroy");
	Route::get('/edit/{mahasiswa}', "MahasiswaController@edit");
	Route::patch('/{mahasiswa}', "MahasiswaController@update");
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
