<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApiKelompokModel extends Model
{
    protected $table = 'api_kelompok';
    protected $fillable = array('nama_kelompok','ketua_kelompok','bendahara_kelompok','humas_kelompok');
}
