<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PencucianModel extends Model
{
    protected $table = 'pencucians';
    protected $fillable = array('jenis_ikan','lokasi_keramba','terakhir_mencuci');
}
