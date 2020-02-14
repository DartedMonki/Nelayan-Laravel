<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\SensorSuhuModel as SensorSuhu;
use App\Http\Resources\SensorSuhuResources;

class ApiSensorSuhuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sensor_suhu = SensorSuhu::paginate(2);
        return SensorSuhuResources::collection($sensor_suhu);
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
        $sensor_suhu = $request ->isMethod('put') ? SensorDo::findOrFail($request->sensor_suhu_id) : new SensorSuhu;

        $sensor_suhu->id = $request->input('sensor_suhu_id');
        $sensor_suhu->suhu_air = $request->input('suhu_air');
        $sensor_suhu->keramba_id = $request->input('keramba_id');

        if($sensor_suhu->save()){
            return new SensorSuhuResources($sensor_suhu);
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
        $sensor_suhu = SensorSuhu::findOrFail($id);
        return new SensorSuhuResources($sensor_suhu);
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
    public function destroy(Request $request)
    {
        $sensor_suhu = SensorSuhu::findOrFail($request->id)->delete();
        return response()->json(['success' => true],200);

    }
}
