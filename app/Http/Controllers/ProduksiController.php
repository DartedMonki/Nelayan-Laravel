<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProduksiModel as Produksi;
use Auth;

class ProduksiController extends Controller
{
	public function index(Produksi $produksi)
	{
		
		return view('produksi.index', ['produksi' => $produksi->paginate(15)]);
	}

	public function create()
    {
        return view('produksi.penebaran');
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
    public function tebar(Request $request)
    {
    	$produksi = new Produksi();
    	$produksi->id_user = $request->input('id_user');
    	$produksi->nama_ikan = $request->input('nama_ikan');
    	$produksi->panjang_ikan = $request->input('panjang_ikan');
    	$produksi->jumlah_ikan = $request->input('jumlah_ikan'); 
    	$produksi->tanggal_tebar = $request->input('tanggal_tebar');
    	$produksi->id_keramba = $request->input('id_keramba');

    	$produksi->save();
    	return redirect()->route('produksi.index')->withStatus(__('Penebaran berhasil dibuat.'));
    }
 	public function pencucian(Request $request,$id)
    {
    	
    	$panjang_ikan = $request->panjang_ikan;
    	$tanggal_cuci = $request->tanggal_cuci;
    	$jumlah_ikan = $request->jumlah_ikan;


    	$produksis = Produksi::find($id);
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


    	$produksis = Produksi::find($id);
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


    	$produksis = Produksi::find($id);
    	$produksis->panjang_ikan = $panjang_ikan;
    	$produksis->tanggal_panen = $tanggal_panen;
    	$produksis->jumlah_ikan = $jumlah_ikan;
    	$produksis->status_panen = 'Sudah Dipanen';
    	$produksis->save();

    	return response()->json($produksis);
    }
    public function delete($id)
    {

    	$produksis = Produksi::find($id);
    	$produksis->delete();

    	return response()->json($produksis);
    }
}
