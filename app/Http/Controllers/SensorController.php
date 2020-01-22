<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SensorModel;

class SensorController extends Controller
{
      public function index()
	{
		return SensorModel::all();
	}
    public function create(Request $request)
    {
    	$sensors = new SensorModel();
    	$sensors->sinyal_sensor = $request->input('sinyal_sensor');
    	$sensors->baterai_sensor = $request->input('baterai_sensor'); 
    	$sensors->suhu_air = $request->input('suhu_air');
    	$sensors->kecepatan_angin = $request->input('kecepatan_angin');
        $sensors->kelembaban_udara = $request->input('kelembaban_udara');
        $sensors->curah_hujan = $request->input('curah_hujan');
        $sensors->kecepatan_arus = $request->input('kecepatan_arus');
        $sensors->id_keramba = $request->input('id_keramba');
    
    	$sensors->save();
    	return response()->json($sensors);
    }
 	public function update(Request $request,$id)
    {
    	
    	$sinyal_sensor = $request->sinyal_sensor;
    	$baterai_sensor = $request->baterai_sensor;
    	$suhu_air = $request->suhu_air;
    	$kecepatan_angin = $request->kecepatan_angin;
    	$kelembaban_udara = $request->kelembaban_udara;
    	$curah_hujan = $request->curah_hujan;
    	$kecepatan_arus = $request->kecepatan_arus;
        $id_keramba = $request->id_keramba;


    	$sensors = sensorModel::find($id);
    	$sensors->sinyal_sensor = $sinyal_sensor;
    	$sensors->baterai_sensor = $baterai_sensor;
    	$sensors->suhu_air = $suhu_air;
    	$sensors->kecepatan_angin = $kecepatan_angin;
        $sensors->kelembaban_udara = $kelembaban_udara;
        $sensors->curah_hujan = $curah_hujan;
        $sensors->kecepatan_arus = $kecepatan_arus;
        $sensors->id_keramba = $id_keramba;
    	$sensors->save();

    	return response()->json($sensors);
    }
    public function delete($id)
    {

    	$sensors = SensorModel::find($id);
    	$sensors->delete();

    	return response()->json($sensors);
    }
    public function showbyid($id)
    {
    	$sensors = SensorModel::find($id);
    	if(is_null($sensors))
    	{
    		return response()->json("not found");
    	}
    	return response()->json($sensors);
    }
}