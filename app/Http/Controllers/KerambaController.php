<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KerambaModel;

class KerambaController extends Controller
{
    public function index()
	{
		return KerambaModel::all();
	}
    public function create(Request $request)
    {
    	$kerambas = new kerambaModel();
    	$kerambas->nama_keramba = $request->input('nama_keramba');
    	$kerambas->panjang_keramba = $request->input('panjang_keramba'); 
    	$kerambas->lebar_keramba = $request->input('lebar_keramba');
    	$kerambas->kapasitas_keramba = $request->input('kapasitas_keramba');
        $kerambas->id_kelompok = $request->input('id_kelompok');
    
    	$kerambas->save();
    	return response()->json($kerambas);
    }
 	public function update(Request $request,$id)
    {
    	
    	$nama_keramba = $request->nama_keramba;
    	$panjang_keramba = $request->panjang_keramba;
    	$lebar_keramba = $request->lebar_keramba;
    	$kapasitas_keramba = $request->kapasitas_keramba;
        $id_kelompok = $request->id_kelompok;


    	$kerambas = KerambaModel::find($id);
    	$kerambas->nama_keramba = $nama_keramba;
    	$kerambas->panjang_keramba = $panjang_keramba;
    	$kerambas->lebar_keramba = $lebar_keramba;
    	$kerambas->kapasitas_keramba = $kapasitas_keramba;
        $kerambas->id_kelompok = $id_kelompok;
    	$kerambas->save();

    	return response()->json($kerambas);
    }
    public function delete($id)
    {

    	$kerambas = KerambaModel::find($id);
    	$kerambas->delete();

    	return response()->json($kerambas);
    }
    public function showbyid($id)
    {
    	$kerambas = KerambaModel::find($id);
    	if(is_null($kerambas))
    	{
    		return response()->json("not found");
    	}
    	return response()->json($kerambas);
    }
}

