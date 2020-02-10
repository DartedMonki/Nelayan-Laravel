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

Route::get('/apikelompok','ApiKelompokController@index');
Route::get('/apikelompok/{id}','ApiKelompokController@show');
Route::post('/apikelompokstore','ApiKelompokController@store');
Route::put('/apikelompokstore','ApiKelompokController@store');
Route::delete('/apikelompokdelete/{id}','ApiKelompokController@destroy');

Route::get('/produksishowapi','ProduksiController@index');
Route::get('/produksishowapi/{id}','ProduksiController@showbyid');
Route::post('/produksiinputapi','ProduksiController@penebaran')->name('produksi.input');
Route::put('/pemindahanupdateapi/{id}','ProduksiController@pemindahan');
Route::put('/pencucianupdateapi/{id}','ProduksiController@pencucian');
Route::put('/panenupdateapi/{id}','ProduksiController@panen');
Route::delete('/produksiapi/{id}','ProduksiController@delete');

Route::get('/kerambaapi','KerambaController@index');
Route::get('/kerambaapi/{id}','KerambaController@showbyid');
Route::post('/kerambaapi','KerambaController@create')->name('keramba.input');
Route::put('/kerambaapi/{id}','KerambaController@update');
Route::delete('/kerambaapi/{id}','KerambaController@delete');

Route::get('/kelompokapi','KelompokController@index');
Route::get('/kelompokapi/{id}','KelompokController@showbyid');
Route::post('/kelompokapi','KelompokController@store')->name('kelompok.input');
Route::put('/kelompokapi/{id}','KelompokController@update')->name('kelompok.edit');
Route::delete('/kelompokapi/delete/{id}','KelompokController@destroy')->name('kelompok.delete');

Route::get('/pakanapi','PakanController@index');
Route::get('/pakanapi/{id}','PakanController@showbyid');
Route::post('/pakanapi','PakanController@create')->name('pakan.input');
Route::put('/pakanapi/{id}','PakanController@update');
Route::delete('/pakanapi/{id}','PakanController@delete');

Route::get('/sensorapi','SensorController@index');
Route::get('/sensorapi/{id}','SensorController@showbyid');
Route::post('/sensorapi','SensorController@create')->name('sensor.input');
Route::put('/sensorapi/{id}','SensorController@update');
Route::delete('/sensorapi/{id}','SensorController@delete');


Route::get('/penebaranapi','PenebaranController@index');
Route::get('/penebaranapi/{id}','PenebaranController@showbyid');
Route::post('/penebaranapi','PenebaranController@create')->name('penebaran.input');
Route::put('/penebaranapi/{id}','PenebaranController@update');
Route::delete('/penebaranapi/{id}','PenebaranController@delete');


Route::get('/pencucianapi','PencucianController@index');
Route::get('/pencucianapi/{id}','PencucianController@showbyid');
Route::post('/pencucianapi','PencucianController@create')->name('pencucian.input');
Route::put('/pencucianapi/{id}','PencucianController@update');
Route::delete('/pencucianapi/{id}','PencucianController@delete');

Route::get('/pemindahanapi','PemindahanController@index');
Route::get('/pemindahanapi/{id}','PemindahanController@showbyid');
Route::post('/pemindahanapi','PemindahanController@create')->name('pemindahan.input');
Route::put('/pemindahanapi/{id}','PemindahanController@update');
Route::delete('/pemindahanapi/{id}','PemindahanController@delete');

Route::get('/panenapi','PanenController@index');
Route::get('/panenapi/{id}','PanenController@showbyid');
Route::post('/panenapi','PanenController@create')->name('panen.input');
Route::put('/panenapi/{id}','PanenController@update');
Route::delete('/panenapi/{id}','PanenController@delete');