<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KelompokModel as Kelompok;
use App\User as User;

class KelompokController extends Controller
{
    public function index(Kelompok $model)
	{
		$kelompok = Kelompok::find(auth()->user()->kelompok_id);
		return view('kelompok.index', compact('kelompok'));
	}

	public function create()
    {
        return view('kelompok.create');
	}

	public function join()
    {
		$kelompok = Kelompok::pluck('nama_kelompok', 'id');

        return view('kelompok.join', compact('kelompok', $kelompok));
	}

	public function joined(Request $request)
    {
		$user = User::find(auth()->user()->id);
		$user->kelompok_id = $request->input('kelompok_id');
		$user->save();

        return redirect()->route('kelompok.index')->withStatus(__('Kelompok berhasil diikuti.'));
	}
	
    public function store(Request $request)
    {
    	$kelompok = new Kelompok();
    	$kelompok->nama_kelompok = $request->input('nama_kelompok');
    	$kelompok->ketua_kelompok = auth()->user()->name;
    	$kelompok->bendahara_kelompok = $request->input('bendahara_kelompok'); 
        $kelompok->humas_kelompok = $request->input('humas_kelompok'); 
		
		$kelompok->save();

		$user = User::find(auth()->user()->id);
		$user->kelompok_id = $kelompok->id;
		$user->save();

		// $id = $kelompok->id;
		// var_dump($id);
		// die();
		// $lap = 1;
		// auth()->user()->update(['kelompok_id' => '$id']);
    	return redirect()->route('kelompok.index')->withStatus(__('Kelompok berhasil dibuat.'));
    }
 	// public function edit($id)
    // {
    // 	$kelompok = Kelompok::find($id);
	// 	return view('kelompok.edit', compact('kelompok'));
	// }

	public function update(Request $request)
    {
		Kelompok::whereId(auth()->user()->kelompok_id)->update($request->except(['_token','_method']));
        return redirect()->route('kelompok.index')->withStatus(__('Kelompok berhasil diperbaharui.'));
	}
	
    public function destroy($id)
    {
		$kelompok = Kelompok::find($id);
    	$kelompok->delete();

    	return redirect()->route('kelompok.index')->withStatus(__('Kelompok berhasil dihapus.'));
    }
    public function showbyid($id)
    {
    	$kelompoks = Kelompok::find($id);
    	if(is_null($kelompoks))
    	{
    		return response()->json("not found");
    	}
    	return response()->json($kelompoks);
    }
}
