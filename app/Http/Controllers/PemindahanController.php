<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PemindahanModel;

class PemindahanController extends Controller
{
    public function index()
	{
		return pemindahanModel::all();
	}
    public function create(Request $request)
    {
    	$pemindahans = new pemindahanModel();
    	$pemindahans->jenis_ikan = $request->input('jenis_ikan');
    	$pemindahans->panjang_ikan_terkini = $request->input('panjang_ikan_terkini');
    	$pemindahans->jumlah_ikan = $request->input('jumlah_ikan'); 
    	$pemindahans->lokasi_sebelum = $request->input('lokasi_sebelum');
    	$pemindahans->lokasi_setelah = $request->input('lokasi_setelah'); 

    	$pemindahans->save();
    	return response()->json($pemindahans);
    }
 	public function update(Request $request,$id)
    {
    	
    	$jenis_ikan = $request->jenis_ikan;
    	$panjang_ikan_terkini = $request->panjang_ikan_terkini;
    	$jumlah_ikan = $request->jumlah_ikan;
        $lokasi_sebelum = $request->lokasi_sebelum;
    	$lokasi_setelah = $request->lokasi_setelah; 

    	$pemindahans = pemindahanModel::find($id);
    	$pemindahans->jenis_ikan = $jenis_ikan;
    	$pemindahans->panjang_ikan_terkini = $panjang_ikan_terkini;
    	$pemindahans->jumlah_ikan = $jumlah_ikan;
    	$pemindahans->lokasi_sebelum = $lokasi_sebelum;
    	$pemindahans->lokasi_setelah = $lokasi_setelah;
    	$pemindahans->save();

    	return response()->json($pemindahans);
    }
    public function delete($id)
    {

    	$pemindahans = pemindahanModel::find($id);
    	$pemindahans->delete();

    	return response()->json($pemindahans);
    }
    public function showbyid($id)
    {
    	$pemindahans = pemindahanModel::find($id);
    	if(is_null($pemindahans))
    	{
    		return response()->json("not found");
    	}
    	return response()->json($pemindahans);
    }
}
