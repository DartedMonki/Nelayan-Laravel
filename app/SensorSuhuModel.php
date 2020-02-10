<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SensorSuhuModel extends Model
{
    protected $table = 'sensor_suhu';
    protected $fillable = array('suhu_air','keramba_id');
}
