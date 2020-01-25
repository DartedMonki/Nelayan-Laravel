<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KelompokModel extends Model
{
    protected $table = 'kelompok';
    protected $fillable = array('nama_kelompok','ketua_kelompok','bendahara_kelompok','humas_kelompok');
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
