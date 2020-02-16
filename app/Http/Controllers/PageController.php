<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    /**
     * Display Halaman Sensor
     *
     * @return \Illuminate\View\View
     */
    public function sensor()
	{
        // return view('perangkat.sensor', ['sensor' => $model->paginate(15)]);
        return view('perangkat.sensor');
    }
    public function pakan()
	{
        // return view('perangkat.sensor', ['sensor' => $model->paginate(15)]);
        return view('perangkat.pakan');
	}

}
