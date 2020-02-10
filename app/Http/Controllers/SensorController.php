<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SensorModel as Sensor;
use App\SensorSuhuModel as SensorSuhu;

class SensorController extends Controller
{
    public function index(SensorSuhu $model)
	{
		// return SensorModel::all();
		return view('perangkat.sensor', ['sensor' => $model->paginate(15)]);
	}
    // public function create(Request $request)
    // {
    // 	$sensors = new SensorModel();
    // 	$sensors->sinyal_sensor = $request->input('sinyal_sensor');
    // 	$sensors->baterai_sensor = $request->input('baterai_sensor'); 
    // 	$sensors->suhu_air = $request->input('suhu_air');
    // 	$sensors->kecepatan_angin = $request->input('kecepatan_angin');
    //     $sensors->kelembaban_udara = $request->input('kelembaban_udara');
    //     $sensors->curah_hujan = $request->input('curah_hujan');
    //     $sensors->kecepatan_arus = $request->input('kecepatan_arus');
    //     $sensors->keramba_id = $request->input('keramba_id');
    
    // 	$sensors->save();
    // 	return response()->json($sensors);
    // }
 	// public function update(Request $request,$id)
    // {
    	
    // 	$sinyal_sensor = $request->sinyal_sensor;
    // 	$baterai_sensor = $request->baterai_sensor;
    // 	$suhu_air = $request->suhu_air;
    // 	$kecepatan_angin = $request->kecepatan_angin;
    // 	$kelembaban_udara = $request->kelembaban_udara;
    // 	$curah_hujan = $request->curah_hujan;
    // 	$kecepatan_arus = $request->kecepatan_arus;
    //     $keramba_id = $request->keramba_id;


    // 	$sensors = sensorModel::find($id);
    // 	$sensors->sinyal_sensor = $sinyal_sensor;
    // 	$sensors->baterai_sensor = $baterai_sensor;
    // 	$sensors->suhu_air = $suhu_air;
    // 	$sensors->kecepatan_angin = $kecepatan_angin;
    //     $sensors->kelembaban_udara = $kelembaban_udara;
    //     $sensors->curah_hujan = $curah_hujan;
    //     $sensors->kecepatan_arus = $kecepatan_arus;
    //     $sensors->keramba_id = $keramba_id;
    // 	$sensors->save();

    // 	return response()->json($sensors);
    // }
    // public function delete($id)
    // {

    // 	$sensors = SensorModel::find($id);
    // 	$sensors->delete();

    // 	return response()->json($sensors);
    // }
    // public function showbyid($id)
    // {
    // 	$sensors = SensorModel::find($id);
    // 	if(is_null($sensors))
    // 	{
    // 		return response()->json("not found");
    // 	}
    // 	return response()->json($sensors);
    // }
}
