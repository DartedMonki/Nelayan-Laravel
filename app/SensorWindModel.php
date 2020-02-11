<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SensorWindModel extends Model
{
    protected $table = 'sensor_wind';
    protected $fillable = array('time','date','arah_angin','kecepatan_angin');
}
