<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SensorWaveModel extends Model
{
    protected $table = 'sensor_wave';
    protected $fillable = array('time','date','ketinggian_air');
}
