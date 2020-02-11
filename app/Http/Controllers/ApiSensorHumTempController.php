<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\SensorHumTempModel as SensorHumTemp;
use App\Http\Resources\SensorHumTempResources;

class ApiSensorHumTempController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sensor_humtemp = Sensorhumtemp::paginate(5);
        return SensorhumtempResources::collection($sensor_humtemp);
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
        $sensor_humtemp = $request ->isMethod('put') ? Sensorhumtemp::findOrFail($request->sensor_humtemp_id) : new Sensorhumtemp;

        $sensor_humtemp->id = $request->input('sensor_humtemp_id');
        $sensor_humtemp->time = $request->input('time');
        $sensor_humtemp->date = $request->input('date');
        $sensor_humtemp->humidity = $request->input('humidity');
        $sensor_humtemp->temperature = $request->input('temperature');



        if($sensor_humtemp->save()){
            return new SensorhumtempResources($sensor_humtemp);
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
        $sensor_humtemp = Sensorhumtemp::findOrFail($id);
        return new SensorhumtempResources($sensor_humtemp);
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
        $sensor_humtemp = Sensorhumtemp::findOrFail($id);
        if($sensor_humtemp->delete()){
        return new SensorhumtempResources($sensor_humtemp);
    }}
}
