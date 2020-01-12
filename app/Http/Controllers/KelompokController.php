<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KelompokModel;

class KelompokController extends Controller
{
     public function index()
	{
		return kelompokModel::all();
	}
    public function create(Request $request)
    {
    	$kelompoks = new KelompokModel();
    	$kelompoks->nama_kelompok = $request->input('nama_kelompok');
    	$kelompoks->ketua_kelompok = $request->input('ketua_kelompok');
    	$kelompoks->bendahara_kelompok = $request->input('bendahara_kelompok'); 
    	$kelompoks->anggota_kelompok = $request->input('anggota_kelompok');
    
    	$kelompoks->save();
    	return response()->json($kelompoks);
    }
 	public function update(Request $request,$id)
    {
    	
    	$nama_kelompok = $request->nama_kelompok;
    	$ketua_kelompok = $request->ketua_kelompok;
    	$bendahara_kelompok = $request->bendahara_kelompok;
    	$anggota_kelompok = $request->anggota_kelompok;

    	$kelompoks = KelompokModel::find($id);
    	$kelompoks->nama_kelompok = $nama_kelompok;
    	$kelompoks->ketua_kelompok = $ketua_kelompok;
    	$kelompoks->bendahara_kelompok = $bendahara_kelompok;
    	$kelompoks->anggota_kelompok = $anggota_kelompok;
    	$kelompoks->save();

    	return response()->json($kelompoks);
    }
    public function delete($id)
    {

    	$kelompoks = KelompokModel::find($id);
    	$kelompoks->delete();

    	return response()->json($kelompoks);
    }
    public function showbyid($id)
    {
    	$kelompoks = KelompokModel::find($id);
    	if(is_null($kelompoks))
    	{
    		return response()->json("not found");
    	}
    	return response()->json($kelompoks);
    }
}
