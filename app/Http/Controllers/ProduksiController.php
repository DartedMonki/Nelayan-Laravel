<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProduksiModel;
use Auth;

class ProduksiController extends Controller
{
      public function index()
	{
		return ProduksiModel::all();
	}
	 public function showbyid($id)
    {
    	$pencucians = ProduksiModel::find($id);
    	if(is_null($produksis))
    	{
    		return response()->json("not found");
    	}
    	return response()->json($produksis);
    }
    public function penebaran(Request $request)
    {
    	$produksis = new ProduksiModel();
    	$produksis->user_penginput = Auth::User()->id;
    	$produksis->nama_ikan = $request->input('nama_ikan');
    	$produksis->panjang_ikan = $request->input('panjang_ikan');
    	$produksis->jumlah_ikan = $request->input('jumlah_ikan'); 
    	$produksis->tanggal_tebar = $request->input('tanggal_tebar');
    	$produksis->id_keramba = $request->input('id_keramba');

    	$produksis->save();
    	return response()->json($produksis);
    }
 	public function pencucian(Request $request,$id)
    {
    	
    	$panjang_ikan = $request->panjang_ikan;
    	$tanggal_cuci = $request->tanggal_cuci;
    	$jumlah_ikan = $request->jumlah_ikan;


    	$produksis = produksiModel::find($id);
    	$produksis->panjang_ikan = $panjang_ikan;
    	$produksis->tanggal_cuci = $tanggal_cuci;
    	$produksis->jumlah_ikan = $jumlah_ikan;
    	$produksis->save();

    	return response()->json($produksis);
    }
    public function pemindahan(Request $request,$id)
    {
    	
    	$panjang_ikan = $request->panjang_ikan;
    	$tanggal_pindah = $request->tanggal_pindah;
    	$jumlah_ikan = $request->jumlah_ikan;


    	$produksis = produksiModel::find($id);
    	$produksis->panjang_ikan = $panjang_ikan;
    	$produksis->tanggal_pindah = $tanggal_pindah;
    	$produksis->jumlah_ikan = $jumlah_ikan;
    	$produksis->save();

    	return response()->json($produksis);
    }
    public function panen(Request $request,$id)
    {
    	
    	$panjang_ikan = $request->panjang_ikan;
    	$tanggal_panen = $request->tanggal_panen;
    	$jumlah_ikan = $request->jumlah_ikan;


    	$produksis = produksiModel::find($id);
    	$produksis->panjang_ikan = $panjang_ikan;
    	$produksis->tanggal_panen = $tanggal_panen;
    	$produksis->jumlah_ikan = $jumlah_ikan;
    	$produksis->status_panen = 'Sudah Dipanen';
    	$produksis->save();

    	return response()->json($produksis);
    }
    public function delete($id)
    {

    	$produksis = produksiModel::find($id);
    	$produksis->delete();

    	return response()->json($produksis);
    }
    public function showbyid($id)
    {
    	$produksis = produksiModel::find($id);
    	if(is_null($produksis))
    	{
    		return response()->json("not found");
    	}
    	return response()->json($produksis);
    }
}
