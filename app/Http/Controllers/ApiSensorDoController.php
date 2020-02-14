<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\SensorDoModel as SensorDo;
use App\Http\Resources\SensorDoResources;

class ApiSensorDoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sensor_do = SensorDo::paginate(2);
        return SensorDoResources::collection($sensor_do);
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
        $sensor_do = $request ->isMethod('put') ? SensorDo::findOrFail($request->sensor_do_id) : new SensorDo;

        $sensor_do->id = $request->input('sensor_do_id');
        $sensor_do->do_air = $request->input('do_air');
        $sensor_do->keramba_id = $request->input('keramba_id');

        if($sensor_do->save()){
            return new SensorDoResources($sensor_do);
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
        $sensor_do = SensorDo::findOrFail($id);
        return new SensorDoResources($sensor_do);
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
        $sensor_do = SensorDo::findOrFail($id);
        if($sensor_do->delete()){
        return new SensorDoResources($sensor_do);
    }}
}
