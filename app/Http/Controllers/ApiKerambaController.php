<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\KerambaModel;
use App\Http\Resources\KerambaResources;

class ApiKerambaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keramba = KerambaModel::paginate(15);
        return KerambaResources::collection($keramba);
    }


    public function store(Request $request)
    {
        $keramba = $request ->isMethod('put') ? KerambaModel::findOrFail($request->keramba_id) : new KerambaModel;
        $keramba->id = $request->input('keramba_id');
        $keramba->nama_keramba = $request->input('nama_keramba');
        $keramba->panjang_keramba = $request->input('panjang_keramba');
        $keramba->lebar_keramba = $request->input('lebar_keramba');
        $keramba->kapasitas_keramba = $request->input('kapasitas_keramba');
        $keramba->kelompok_id = $request->input('kelompok_id');
        $keramba->user_id = $request->input('user_id');

        if($keramba->save()){
            return new KerambaResources($keramba);
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
        $keramba =KerambaModel::findOrFail($id);
        return new KerambaResources($keramba);
    }

    public function showkerambabyidkelompok($kelompok_id)
    {
        $keramba = KerambaModel::where(compact('kelompok_id'))->firstOrFail();
        if(is_null($keramba))
        {
            return response()->json("not found");
        }
        return new KerambaResources($keramba);
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
        $keramba = KerambaModel::findOrFail($id);
        if($keramba->delete()){
        return new KerambaResources($keramba);
    }}
}
