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

Route::group(['middleware' => 'auth'], function () {
		Route::resource('produksi', 'ProduksiController', ['except' => ['show']]);
		Route::post('/produksi/create','ProduksiController@tebar')->name('produksi.tebar');
		Route::get('pencucian', ['as' => 'pages.pencucian', 'uses' => 'PageController@pencucian']);
		Route::get('pemindahan', ['as' => 'pages.pemindahan', 'uses' => 'PageController@pemindahan']);
		Route::get('panen', ['as' => 'pages.panen', 'uses' => 'PageController@panen']);
});

Route::group(['middleware' => 'ketua'], function () {
	Route::get('kelompok', ['as' => 'kelompok.edit', 'uses' => 'KelompokController@edit']);
	Route::put('kelompok', ['as' => 'kelompok.update', 'uses' => 'KelompokController@update']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

Route::group(['middleware' => 'admin'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::resource('listkelompok', 'ListKelompokController', ['except' => ['show']]);
});

