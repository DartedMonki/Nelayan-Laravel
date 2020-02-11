<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\SensorWaveModel as SensorWave;
use App\Http\Resources\SensorWaveResources;

class ApiSensorWaveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sensor_wave = Sensorwave::paginate(5);
        return SensorwaveResources::collection($sensor_wave);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sensor_wave = $request ->isMethod('put') ? Sensorwave::findOrFail($request->sensor_wave_id) : new Sensorwave;

        $sensor_wave->id = $request->input('sensor_wave_id');
        $sensor_wave->time = $request->input('time');
        $sensor_wave->date = $request->input('date');
        $sensor_wave->ketinggian_air = $request->input('ketinggian_air');


        if($sensor_wave->save()){
            return new SensorwaveResources($sensor_wave);
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
        $sensor_wave = Sensorwave::findOrFail($id);
        return new SensorwaveResources($sensor_wave);
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
        $sensor_wave = Sensorwave::findOrFail($id);
        if($sensor_wave->delete()){
        return new SensorwaveResources($sensor_wave);
    }}
}
