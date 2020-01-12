<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PencucianModel;
class PencucianController extends Controller
{
    public function index()
	{
		return PencucianModel::all();
	}
    public function create(Request $request)
    {
    	$pencucians = new PencucianModel();
    	$pencucians->jenis_ikan = $request->input('jenis_ikan');
    	$pencucians->lokasi_keramba = $request->input('lokasi_keramba');
    	$pencucians->terakhir_mencuci = $request->input('terakhir_mencuci'); 

    	$pencucians->save();
    	return response()->json($pencucians);
    }
 	public function update(Request $request,$id)
    {
    	
    	$jenis_ikan = $request->jenis_ikan;
    	$lokasi_keramba = $request->lokasi_keramba;
    	$terakhir_mencuci = $request->terakhir_mencuci; 

    	$pencucians = PencucianModel::find($id);
    	$pencucians->jenis_ikan = $jenis_ikan;
    	$pencucians->lokasi_keramba = $lokasi_keramba;
    	$pencucians->terakhir_mencuci = $terakhir_mencuci;
    	$pencucians->save();

    	return response()->json($pencucians);
    }
    public function delete($id)
    {

    	$pencucians = PencucianModel::find($id);
    	$pencucians->delete();

    	return response()->json($pencucians);
    }
    public function showbyid($id)
    {
    	$pencucians = PencucianModel::find($id);
    	if(is_null($pencucians))
    	{
    		return response()->json("not found");
    	}
    	return response()->json($pencucians);
    }
}
