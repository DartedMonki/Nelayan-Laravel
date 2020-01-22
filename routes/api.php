<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/produksi','ProduksiController@index');
Route::get('/produksi/{id}','ProduksiController@showbyid');
Route::post('/produksiinput','ProduksiController@penebaran');
Route::put('/pemindahanupdate/{id}','ProduksiController@pemindahan');
Route::put('/pencucianupdate/{id}','ProduksiController@pencucian');
Route::put('/panenupdate/{id}','ProduksiController@panen');
Route::delete('/produksi/{id}','ProduksiController@delete');

Route::get('/keramba','KerambaController@index');
Route::get('/keramba/{id}','KerambaController@showbyid');
Route::post('/keramba','KerambaController@create')->name('keramba.input');
Route::put('/keramba/{id}','KerambaController@update');
Route::delete('/keramba/{id}','KerambaController@delete');

Route::get('/kelompok','KelompokController@index');
Route::get('/kelompok/{id}','KelompokController@showbyid');
Route::post('/kelompok','KelompokController@create')->name('kelompok.input');
Route::put('/kelompok/{id}','KelompokController@update');
Route::delete('/kelompok/{id}','KelompokController@delete');

Route::get('/pakan','PakanController@index');
Route::get('/pakan/{id}','PakanController@showbyid');
Route::post('/pakan','PakanController@create')->name('pakan.input');
Route::put('/pakan/{id}','PakanController@update');
Route::delete('/pakan/{id}','PakanController@delete');

Route::get('/sensor','SensorController@index');
Route::get('/sensor/{id}','SensorController@showbyid');
Route::post('/sensor','SensorController@create')->name('sensor.input');
Route::put('/sensor/{id}','SensorController@update');
Route::delete('/sensor/{id}','SensorController@delete');


//Route::get('/penebaran','PenebaranController@index');
// Route::get('/penebaran/{id}','PenebaranController@showbyid');
// Route::post('/penebaran','PenebaranController@create')->name('penebaran.input');
// Route::put('/penebaran/{id}','PenebaranController@update');
// Route::delete('/penebaran/{id}','PenebaranController@delete');


// Route::get('/pencucian','PencucianController@index');
// Route::get('/pencucian/{id}','PencucianController@showbyid');
// Route::post('/pencucian','PencucianController@create')->name('pencucian.input');
// Route::put('/pencucian/{id}','PencucianController@update');
// Route::delete('/pencucian/{id}','PencucianController@delete');

// Route::get('/pemindahan','PemindahanController@index');
// Route::get('/pemindahan/{id}','PemindahanController@showbyid');
// Route::post('/pemindahan','PemindahanController@create')->name('pemindahan.input');
// Route::put('/pemindahan/{id}','PemindahanController@update');
// Route::delete('/pemindahan/{id}','PemindahanController@delete');

// Route::get('/panen','PanenController@index');
// Route::get('/panen/{id}','PanenController@showbyid');
// Route::post('/panen','PanenController@create')->name('panen.input');
// Route::put('/panen/{id}','PanenController@update');
// Route::delete('/panen/{id}','PanenController@delete');