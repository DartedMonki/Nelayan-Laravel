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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Auth::routes();


Route::group(['middleware' => 'auth'], function () {
Route::get('/home', 'HomeController@index')->name('home');
});

// Route Untuk Produksi
Route::group(['middleware' => 'auth'], function () {
		Route::resource('produksi', 'ProduksiController', ['except' => ['show']]);
		Route::post('produksi/create','ProduksiController@tebar')->name('produksi.tebar');
		Route::get('produksi/{id}/cuci','ProduksiController@pencucian')->name('produksi.cuci');
		Route::get('produksi/{id}/pindah','ProduksiController@pemindahan')->name('produksi.pindah');
		Route::get('produksi/{id}/panen','ProduksiController@panen')->name('produksi.panen');
});

// Route Untuk Edit Profile User
Route::group(['middleware' => 'auth'], function () {
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

// Route Untuk Keramba
Route::group(['middleware' => 'auth'], function () {
	Route::resource('keramba', 'KerambaController', ['except' => ['show']]);
});

// Route Untuk Kelompok
Route::group(['middleware' => 'auth'], function () {
	Route::get('kelompok', ['as' => 'kelompok.index', 'uses' => 'KelompokController@index']);
	Route::get('kelompok/join', ['as' => 'kelompok.join', 'uses' => 'KelompokController@join']);
	Route::post('kelompok/join', ['as' => 'kelompok.joined', 'uses' => 'KelompokController@joined']);
});
Route::group(['middleware' => 'ketua'], function () {
	Route::get('kelompok/create', ['as' => 'kelompok.create', 'uses' => 'KelompokController@create']);
	Route::post('kelompok/create', ['as' => 'kelompok.store', 'uses' => 'KelompokController@store']);
	Route::put('kelompok', ['as' => 'kelompok.update', 'uses' => 'KelompokController@update']);
});


// Route Untuk Admin
Route::group(['middleware' => 'admin'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::resource('listkelompok', 'ListKelompokController', ['except' => ['show']]);
});

