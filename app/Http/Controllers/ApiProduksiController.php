<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\ProduksiModel;
use App\Http\Resources\ProduksiResources;
use App\PencucianModel;
use App\Http\Resources\PencucianResources;
use App\PemindahanModel;
use App\Http\Resources\PemindahanResources;

class ApiProduksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produksi = ProduksiModel::paginate(5);
        return ProduksiResources::collection($produksi);
    }

    public function pencucianget()
    {
        $pencucian = PencucianModel::paginate(15);
        return PencucianResources::collection($pencucian);
    }

    public function pemindahanget()
    {
        $pemindahan = PemindahanModel::paginate(15);
        return PemindahanResources::collection($pemindahan);
    }

    public function store(Request $request)
    {
        $produksi = $request ->isMethod('put') ? ProduksiModel::findOrFail($request->produksi_id) : new ProduksiModel;
        $produksi->id = $request->input('produksi_id');
        $produksi->user_id = $request->input('user_id');
    	$produksi->nama_ikan = $request->input('nama_ikan');
    	$produksi->panjang_ikan = $request->input('panjang_ikan');
    	$produksi->jumlah_ikan = $request->input('jumlah_ikan'); 
    	$produksi->tanggal_tebar = $request->input('tanggal_tebar');
        $produksi->keramba_id = $request->input('keramba_id');
        
        if($produksi->save()){
            return new ProduksiResources($produksi);
        }

    }

    public function pencucianstore(Request $request)
    {
        $pencucian = $request ->isMethod('put') ? ProduksiModel::findOrFail($request->pencucian_id) : new PencucianModel;
        $pencucian->id = $request->input('pencucian_id');
        $pencucian->user_id = $request->input('user_id');
    	$pencucian->panjang_ikan = $request->input('panjang_ikan');
    	$pencucian->jumlah_ikan = $request->input('jumlah_ikan'); 
    	$pencucian->tanggal_cuci = $request->input('tanggal_cuci');
        $pencucian->keramba_id = $request->input('keramba_id');
        $pencucian->produksi_id = $request->input('produksi_id');
        
        if($pencucian->save()){
            return new PencucianResources($pencucian);
        }

    }
    
    public function pemindahanstore(Request $request)
    {
        $pemindahan = $request ->isMethod('put') ? ProduksiModel::findOrFail($request->pemindahan_id) : new pemindahanModel;
        $pemindahan->id = $request->input('pemindahan_id');
        $pemindahan->user_id = $request->input('user_id');
    	$pemindahan->panjang_ikan = $request->input('panjang_ikan');
    	$pemindahan->jumlah_ikan = $request->input('jumlah_ikan'); 
    	$pemindahan->tanggal_cuci = $request->input('tanggal_pindah');
        $pemindahan->keramba_id = $request->input('keramba_sebelum');
        $pemindahan->keramba_id = $request->input('keramba_sesudah');
        $pemindahan->produksi_id = $request->input('produksi_id');
        
        if($pemindahan->save()){
            return new pemindahanResources($pemindahan);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produksi = ProduksiModel::findOrFail($id);
        return new ProduksiResources($produksi);
    }
    public function showcuci($id)
    {
        $pencucian = PencucianModel::findOrFail($id);
        return new PencucianResources($pencucian);
    }
    public function showpindah($id)
    {
        $pemindahan = PemindahanModel::findOrFail($id);
        return new PemindahanResources($pemindahan);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produksi = ProduksiModel::findOrFail($id);
        if($produksi->delete()){
        return new ProduksiResources($produksi);
    }
}
    public function destroypindah($id)
    {
        $pemindahan = PemindahanModel::findOrFail($id);
        if($pemindahan->delete()){
        return new PemindahanResources($pemindahan);
    }
}
public function destroycuci($id)
{
    $pencucian = PencucianModel::findOrFail($id);
    if($pencucian->delete()){
    return new PencucianResources($pencucian);
}
}
}
