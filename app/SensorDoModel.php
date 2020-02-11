<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SensorDoModel extends Model
{
    protected $table = 'sensor_do';
    protected $fillable = array('do_air','keramba_id');
}
