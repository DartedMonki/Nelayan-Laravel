<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PanenModel;

class PanenController extends Controller
{
    public function index()
	{
		return PanenModel::all();
	}
    public function create(Request $request)
    {
    	$panens = new PanenModel();
    	$panens->jenis_ikan = $request->input('jenis_ikan');
    	$panens->panjang_ikan = $request->input('panjang_ikan');
    	$panens->jumlah_ikan = $request->input('jumlah_ikan'); 
    	$panens->lokasi_panen = $request->input('lokasi_panen');

    	$panens->save();
    	return response()->json($panens);
    }
 	public function update(Request $request,$id)
    {
    	
    	$jenis_ikan = $request->jenis_ikan;
    	$panjang_ikan = $request->panjang_ikan;
    	$jumlah_ikan = $request->jumlah_ikan;
    	$lokasi_panen = $request->lokasi_panen;


    	$panens = PanenModel::find($id);
    	$panens->jenis_ikan = $jenis_ikan;
    	$panens->panjang_ikan = $panjang_ikan;
    	$panens->jumlah_ikan = $jumlah_ikan;
    	$panens->lokasi_panen = $lokasi_panen;
    	$panens->save();

    	return response()->json($panens);
    }
    public function delete($id)
    {

    	$panens = PanenModel::find($id);
    	$panens->delete();

    	return response()->json($panens);
    }
    public function showbyid($id)
    {
    	$panens = PanenModel::find($id);
    	if(is_null($panens))
    	{
    		return response()->json("not found");
    	}
    	return response()->json($panens);
    }
}
