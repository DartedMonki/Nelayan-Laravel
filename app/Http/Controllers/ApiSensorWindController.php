<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\SensorWindModel as SensorWind;
use App\Http\Resources\SensorWindResources;

class ApiSensorWindController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       $sensor_wind = Sensorwind::paginate(5);
       return SensorwindResources::collection($sensor_wind);
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
       $sensor_wind = $request ->isMethod('put') ? Sensorwind::findOrFail($request->sensor_wind_id) : new Sensorwind;

       $sensor_wind->id = $request->input('sensor_wind_id');
       $sensor_wind->time = $request->input('time');
       $sensor_wind->date = $request->input('date');
       $sensor_wind->arah_angin = $request->input('arah_angin');
       $sensor_wind->kecepatan_angin = $request->input('kecepatan_angin');



       if($sensor_wind->save()){
           return new SensorwindResources($sensor_wind);
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
       $sensor_wind = Sensorwind::findOrFail($id);
       return new SensorwindResources($sensor_wind);
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
       $sensor_wind = Sensorwind::findOrFail($id);
       if($sensor_wind->delete()){
       return new SensorwindResources($sensor_wind);
   }}
}
