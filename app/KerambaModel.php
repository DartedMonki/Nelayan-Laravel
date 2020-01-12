<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KerambaModel extends Model
{
    protected $table = 'kerambas';
    protected $fillable = array('nama_keramba','jumlah_kotak','panjang_keramba','lebar_keramba','kapasitas_keramba');
}
