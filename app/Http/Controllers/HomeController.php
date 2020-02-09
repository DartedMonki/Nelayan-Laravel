<?php

namespace App\Http\Controllers;

use App\KerambaModel as Keramba;
use App\User as User;
use App\KelompokModel as Kelompok;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index(Keramba $model)
    {
        if ($model->count()){
            return view('dashboard', ['keramba' => $model->paginate(6)]);
        }
        else {
            return redirect()->route('welcome')->withStatus(__('Belum Ada Keramba, Silahkan Buka Halaman Keramba Untuk Menambahkan Keramba'));
        }
    }
}
