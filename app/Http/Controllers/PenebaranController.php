<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PenebaranModel;
class PenebaranController extends Controller
{
	public function index()
	{
		return PenebaranModel::all();
	}
    public function create(Request $request)
    {
    	$penebarans = new PenebaranModel();
    	$penebarans->jenis_ikan = $request->input('jenis_ikan');
    	$penebarans->jumlah_ikan = $request->input('jumlah_ikan');
    	$penebarans->panjang_ikan = $request->input('panjang_ikan'); 
    	$penebarans->lokasi_penebaran = $request->input('lokasi_penebaran');

    	$penebarans->save();
    	return response()->json($penebarans);
    }
 	public function update(Request $request,$id)
    {
    	
    	$jenis_ikan = $request->jenis_ikan;
    	$jumlah_ikan = $request->jumlah_ikan;
    	$panjang_ikan = $request->panjang_ikan; 
    	$lokasi_penebaran = $request->lokasi_penebaran;

    	$penebarans = PenebaranModel::find($id);
    	$penebarans->jenis_ikan = $jenis_ikan;
    	$penebarans->jumlah_ikan = $jumlah_ikan;
    	$penebarans->panjang_ikan = $panjang_ikan;
    	$penebarans->lokasi_penebaran = $lokasi_penebaran;
    	$penebarans->save();

    	return response()->json($penebarans);
    }
    public function delete($id)
    {

    	$penebarans = PenebaranModel::find($id);
    	$penebarans->delete();

    	return response()->json($penebarans);
    }
    public function showbyid($id)
    {
    	$penebarans = PenebaranModel::find($id);
    	if(is_null($penebarans))
    	{
    		return response()->json("not found");
    	}
    	return response()->json($penebarans);
    }
}
