<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PakanModel;
class PakanController extends Controller
{
	public function index(PakanModel $model)
	{
		// return PakanModel::all();
		return view('perangkat.pakan', ['pakan' => $model->paginate(15)]);
	}
    // public function create(Request $request)
    // {
    // 	$pakans = new pakanModel();
    // 	$pakans->sinyal_pakan = $request->input('sinyal_pakan');
    // 	$pakans->baterai_pakan = $request->input('baterai_pakan'); 
    // 	$pakans->jenis_pakan = $request->input('jenis_pakan');
    // 	$pakans->durasi_pakan = $request->input('durasi_pakan');
    //     $pakans->pemberian_terakhir = $request->input('pemberian_terakhir');
    //     $pakans->keramba_id = $request->input('keramba_id');
    
    // 	$pakans->save();
    // 	return response()->json($pakans);
    // }
 	// public function update(Request $request,$id)
    // {
    	
    // 	$sinyal_pakan = $request->sinyal_pakan;
    // 	$baterai_pakan = $request->baterai_pakan;
    // 	$jenis_pakan = $request->jenis_pakan;
    // 	$durasi_pakan = $request->durasi_pakan;
    // 	$pemberian_terakhir = $request->pemberian_terakhir;
    //     $keramba_id = $request->keramba_id;


    // 	$pakans = pakanModel::find($id);
    // 	$pakans->sinyal_pakan = $sinyal_pakan;
    // 	$pakans->baterai_pakan = $baterai_pakan;
    // 	$pakans->jenis_pakan = $jenis_pakan;
    // 	$pakans->durasi_pakan = $durasi_pakan;
    //     $pakans->pemberian_terakhir = $pemberian_terakhir;
    //     $pakans->keramba_id = $keramba_id;
    // 	$pakans->save();

    // 	return response()->json($pakans);
    // }
    // public function delete($id)
    // {

    // 	$pakans = pakanModel::find($id);
    // 	$pakans->delete();

    // 	return response()->json($pakans);
    // }
    // public function showbyid($id)
    // {
    // 	$pakans = PakanModel::find($id);
    // 	if(is_null($pakans))
    // 	{
    // 		return response()->json("not found");
    // 	}
    // 	return response()->json($pakans);
    // }
}
