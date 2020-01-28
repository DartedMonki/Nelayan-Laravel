<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProduksiModel as Produksi;
use App\KerambaModel as Keramba;
use Auth;

class ProduksiController extends Controller
{
	public function index(Produksi $produksi)
	{
		
		return view('produksi.index', ['produksi' => $produksi->paginate(15)]);
	}

	public function create()
  {
		$keramba = Keramba::where('kelompok_id', auth()->user()->kelompok_id )->pluck('nama_keramba', 'id');
		
		return view('produksi.penebaran', compact('keramba', $keramba));
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
    	$produksi->user_id = $request->input('user_id');
    	$produksi->nama_ikan = $request->input('nama_ikan');
    	$produksi->panjang_ikan = $request->input('panjang_ikan');
    	$produksi->jumlah_ikan = $request->input('jumlah_ikan'); 
    	$produksi->tanggal_tebar = $request->input('tanggal_tebar');
    	$produksi->keramba_id = $request->input('keramba_id');

    	$produksi->save();
    	return redirect()->route('produksi.index')->withStatus(__('Penebaran berhasil dibuat.'));
    }
 	public function pencucian($id)
    {
    	$produksi = Produksi::find($id);
		return view('produksi.pencucian', compact('produksi'));
    }
    public function pemindahan($id)
    {
    	$produksi = Produksi::find($id);
		return view('produksi.pemindahan', compact('produksi'));
    }
    public function panen($id)
    {
    	$produksi = Produksi::find($id);
		return view('produksi.panen', compact('produksi'));
	}
	public function update(Request $request, $id)
    {
		Produksi::whereId($id)->update($request->except(['_token','_method']));
        return redirect()->route('produksi.index')->withStatus(__('Ikan berhasil diperbaharui.'));
	}
    public function destroy($id)
    {

    	$produksis = Produksi::find($id);
    	$produksis->delete();

    	return redirect()->route('produksi.index')->withStatus(__('Ikan berhasil dihapus.'));
    }
}
