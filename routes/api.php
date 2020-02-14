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
Route::post('/apikelompok/store','ApiKelompokController@store');
Route::put('/apikelompok/store','ApiKelompokController@store');
Route::delete('/apikelompok/delete/{id}','ApiKelompokController@destroy');

Route::get('/apisensorsuhu','ApiSensorSuhuController@index');
Route::get('/apisensorsuhu/{id}','ApiSensorSuhuController@show');
Route::post('/apisensorsuhu/store','ApiSensorSuhuController@store');
Route::put('/apisensorsuhu/store','ApiSensorSuhuController@store');
Route::delete('/apisensorsuhu/delete/{id}','ApiSensorSuhuController@destroy');

Route::get('/apikeramba','ApiKerambaController@index');
Route::get('/apikeramba/{id}','ApiKerambaController@show');
Route::post('/apikerambastore','ApiKerambaController@store');
Route::put('/apikerambastore','ApiKerambaController@store');
Route::delete('/apikerambadelete/{id}','ApiKerambaController@destroy');

Route::get('/apiproduksi','ApiProduksiController@index');
Route::get('/apiproduksi/{id}','ApiProduksiController@show');
Route::post('/apiproduksistore','ApiProduksiController@store');
Route::put('/apiproduksistore','ApiProduksiController@store');
Route::delete('/apiproduksidelete/{id}','ApiProduksiController@destroy');

Route::get('/apisensordo','ApiSensorDoController@index');
Route::get('/apisensordo/{id}','ApiSensorDoController@show');
Route::post('/apisensordostore','ApiSensorDoController@store');
Route::put('/apisensordostore','ApiSensorDoController@store');
Route::delete('/apisensordodelete/{id}','ApiSensorDoController@destroy');

Route::get('/apisensorhumtemp','ApiSensorHumTempController@index');
Route::get('/apisensorhumtemp/{id}','ApiSensorHumTempController@show');
Route::post('/apisensorhumtempstore','ApiSensorHumTempController@store');
Route::put('/apisensorhumtempstore','ApiSensorHumTempController@store');
Route::delete('/apisensorhumtempdelete/{id}','ApiSensorHumTempController@destroy');

Route::get('/apisensorwave','ApiSensorwaveController@index');
Route::get('/apisensorwave/{id}','ApiSensorwaveController@show');
Route::post('/apisensorwavestore','ApiSensorwaveController@store');
Route::put('/apisensorwavestore','ApiSensorwaveController@store');
Route::delete('/apisensorwavedelete/{id}','ApiSensorwaveController@destroy');

Route::get('/apisensorwind','ApiSensorwindController@index');
Route::get('/apisensorwind/{id}','ApiSensorwindController@show');
Route::post('/apisensorwindstore','ApiSensorwindController@store');
Route::put('/apisensorwindstore','ApiSensorwindController@store');
Route::delete('/apisensorwinddelete/{id}','ApiSensorwindController@destroy');

Route::get('/apipencucian','ApiProduksiController@pencucianget');
Route::get('/apipemindahan','ApiProduksiController@pencucianget');
Route::get('/apipencucian/{id}','ApiProduksiController@showcuci');
Route::get('/apipemindahan/{id}','ApiProduksiController@showpindah');
Route::post('/apipencucianstore','ApiProduksiController@pencucianstore');
Route::post('/apipemindahanstore','ApiProduksiController@pemindahanstore');
Route::put('/apipencucianstore','ApiProduksiController@pencucianstore');
Route::put('/apipemindahanstore','ApiProduksiController@pemindahanstore');
Route::delete('/apipencuciandelete/{id}','ApiProduksiController@destroycuci');
Route::delete('/apipemindahandelete/{id}','ApiProduksiController@destroypindah');


// Route::get('/produksishowapi','ProduksiController@index');
// Route::get('/produksishowapi/{id}','ProduksiController@showbyid');
// Route::post('/produksiinputapi','ProduksiController@penebaran')->name('produksi.input');
// Route::put('/pemindahanupdateapi/{id}','ProduksiController@pemindahan');
// Route::put('/pencucianupdateapi/{id}','ProduksiController@pencucian');
// Route::put('/panenupdateapi/{id}','ProduksiController@panen');
// Route::delete('/produksiapi/{id}','ProduksiController@delete');

// Route::get('/kerambaapi','KerambaController@index');
// Route::get('/kerambaapi/{id}','KerambaController@showbyid');
// Route::post('/kerambaapi','KerambaController@create')->name('keramba.input');
// Route::put('/kerambaapi/{id}','KerambaController@update');
// Route::delete('/kerambaapi/{id}','KerambaController@delete');

// Route::get('/kelompokapi','KelompokController@index');
// Route::get('/kelompokapi/{id}','KelompokController@showbyid');
// Route::post('/kelompokapi','KelompokController@store')->name('kelompok.input');
// Route::put('/kelompokapi/{id}','KelompokController@update')->name('kelompok.edit');
// Route::delete('/kelompokapi/delete/{id}','KelompokController@destroy')->name('kelompok.delete');

// Route::get('/pakanapi','PakanController@index');
// Route::get('/pakanapi/{id}','PakanController@showbyid');
// Route::post('/pakanapi','PakanController@create')->name('pakan.input');
// Route::put('/pakanapi/{id}','PakanController@update');
// Route::delete('/pakanapi/{id}','PakanController@delete');

// Route::get('/sensorapi','SensorController@index');
// Route::get('/sensorapi/{id}','SensorController@showbyid');
// Route::post('/sensorapi','SensorController@create')->name('sensor.input');
// Route::put('/sensorapi/{id}','SensorController@update');
// Route::delete('/sensorapi/{id}','SensorController@delete');


// Route::get('/penebaranapi','PenebaranController@index');
// Route::get('/penebaranapi/{id}','PenebaranController@showbyid');
// Route::post('/penebaranapi','PenebaranController@create')->name('penebaran.input');
// Route::put('/penebaranapi/{id}','PenebaranController@update');
// Route::delete('/penebaranapi/{id}','PenebaranController@delete');


// Route::get('/pencucianapi','PencucianController@index');
// Route::get('/pencucianapi/{id}','PencucianController@showbyid');
// Route::post('/pencucianapi','PencucianController@create')->name('pencucian.input');
// Route::put('/pencucianapi/{id}','PencucianController@update');
// Route::delete('/pencucianapi/{id}','PencucianController@delete');

// Route::get('/pemindahanapi','PemindahanController@index');
// Route::get('/pemindahanapi/{id}','PemindahanController@showbyid');
// Route::post('/pemindahanapi','PemindahanController@create')->name('pemindahan.input');
// Route::put('/pemindahanapi/{id}','PemindahanController@update');
// Route::delete('/pemindahanapi/{id}','PemindahanController@delete');

// Route::get('/panenapi','PanenController@index');
// Route::get('/panenapi/{id}','PanenController@showbyid');
// Route::post('/panenapi','PanenController@create')->name('panen.input');
// Route::put('/panenapi/{id}','PanenController@update');
// Route::delete('/panenapi/{id}','PanenController@delete');