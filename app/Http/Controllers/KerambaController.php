<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KerambaModel as Keramba;

class KerambaController extends Controller
{
    public function index(Keramba $model)
	{
		return view('keramba.index', ['keramba' => $model->paginate(15)]);
	}

	public function create()
    {
        return view('keramba.create');
	}
	
    public function store(Request $request)
    {
    	$keramba = new Keramba();
    	$keramba->nama_keramba = $request->input('nama_keramba');
    	$keramba->panjang_keramba = $request->input('panjang_keramba'); 
    	$keramba->lebar_keramba = $request->input('lebar_keramba');
    	$keramba->kapasitas_keramba = $request->input('kapasitas_keramba');
        $keramba->kelompok_id = $request->input('kelompok_id');
        $keramba->user_id = $request->input('user_id');
    
    	$keramba->save();
    	// return response()->json($keramba);
		
    	return redirect()->route('keramba.index')->withStatus(__('Keramba berhasil dibuat.'));
    }
 	public function edit($id)
    {
    	$keramba = Keramba::find($id);
		return view('keramba.edit', compact('keramba'));
	}

	public function update(Request $request, $id)
    {
		Keramba::whereId($id)->update($request->except(['_token','_method']));
        return redirect()->route('keramba.index')->withStatus(__('Keramba berhasil diperbaharui.'));
	}
	
    public function destroy($id)
    {
		$keramba = Keramba::find($id);
    	$keramba->delete();

    	return redirect()->route('keramba.index')->withStatus(__('Keramba berhasil dihapus.'));
    }
}

// class KerambaController extends Controller
// {
//     public function index()
// 	{
// 		return KerambaModel::all();
// 	}
//     public function create(Request $request)
//     {
//     	$kerambas = new kerambaModel();
//     	$kerambas->nama_keramba = $request->input('nama_keramba');
//     	$kerambas->panjang_keramba = $request->input('panjang_keramba'); 
//     	$kerambas->lebar_keramba = $request->input('lebar_keramba');
//     	$kerambas->kapasitas_keramba = $request->input('kapasitas_keramba');
//         $kerambas->id_kelompok = $request->input('id_kelompok');
//         $kerambas->id_user = $request->input('id_user');
    
//     	$kerambas->save();
//     	return response()->json($kerambas);
//     }
//  	public function update(Request $request,$id)
//     {
    	
//     	$nama_keramba = $request->nama_keramba;
//     	$panjang_keramba = $request->panjang_keramba;
//     	$lebar_keramba = $request->lebar_keramba;
//     	$kapasitas_keramba = $request->kapasitas_keramba;
//         $id_kelompok = $request->id_kelompok;
//         $id_user = $request->id_user;


//     	$kerambas = KerambaModel::find($id);
//     	$kerambas->nama_keramba = $nama_keramba;
//     	$kerambas->panjang_keramba = $panjang_keramba;
//     	$kerambas->lebar_keramba = $lebar_keramba;
//     	$kerambas->kapasitas_keramba = $kapasitas_keramba;
//         $kerambas->id_kelompok = $id_kelompok;
//         $kerambas->id_user = $id_user;
//     	$kerambas->save();

//     	return response()->json($kerambas);
//     }
//     public function delete($id)
//     {

//     	$kerambas = KerambaModel::find($id);
//     	$kerambas->delete();

//     	return response()->json($kerambas);
//     }
//     public function showbyid($id)
//     {
//     	$kerambas = KerambaModel::find($id);
//     	if(is_null($kerambas))
//     	{
//     		return response()->json("not found");
//     	}
//     	return response()->json($kerambas);
//     }
// }

