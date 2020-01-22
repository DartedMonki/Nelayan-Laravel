<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KelompokModel extends Model
{
    protected $table = 'kelompoks';
    protected $fillable = array('nama_kelompok','ketua_kelompok','bendahara_kelompok','humas_kelompok','anggota_kelompok');
}
