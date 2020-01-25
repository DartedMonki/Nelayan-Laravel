<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KelompokModel as Kelompok;

class ListKelompokController extends Controller
{
    public function index(Kelompok $model)
	{
		return view('kelompok.index', ['kelompok' => $model->paginate(15)]);
	}

	public function create()
    {
        return view('kelompok.create');
	}
	
    public function store(Request $request)
    {
    	$kelompok = new Kelompok();
    	$kelompok->nama_kelompok = $request->input('nama_kelompok');
    	$kelompok->ketua_kelompok = $request->input('ketua_kelompok');
    	$kelompok->bendahara_kelompok = $request->input('bendahara_kelompok'); 
        $kelompok->humas_kelompok = $request->input('humas_kelompok'); 
    
    	$kelompok->save();
    	return redirect()->route('listkelompok.index')->withStatus(__('Kelompok berhasil dibuat.'));
    }
 	public function edit($id)
    {
    	$kelompok = Kelompok::find($id);
		return view('kelompok.edit', compact('kelompok'));
		
	}

	public function update(Request $request, $id)
    {
		Kelompok::whereId($id)->update($request->except(['_token','_method']));
        return redirect()->route('listkelompok.index')->withStatus(__('Kelompok berhasil diperbaharui.'));
	}
	
    public function destroy($id)
    {
		$kelompok = Kelompok::find($id);
    	$kelompok->delete();

    	return redirect()->route('listkelompok.index')->withStatus(__('Kelompok berhasil dihapus.'));
    }
    public function showbyid($id)
    {
    	$kelompoks = KelompokModel::find($id);
    	if(is_null($kelompoks))
    	{
    		return response()->json("not found");
    	}
    	return response()->json($kelompoks);
    }
}
