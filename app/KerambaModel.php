<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KerambaModel extends Model
{
    protected $table = 'keramba';
    protected $fillable = array('nama_keramba','panjang_keramba','lebar_keramba','kapasitas_keramba','id_keramba','id_user');
}
