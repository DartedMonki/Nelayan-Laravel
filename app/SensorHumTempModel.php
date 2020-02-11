<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SensorHumTempModel extends Model
{
    protected $table = 'sensor_humtemp';
    protected $fillable = array('time','date','humidity','temperature');
}
