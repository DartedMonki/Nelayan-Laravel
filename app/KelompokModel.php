<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\KerambaModel as Keramba;
use App\ProduksiModel;

class KelompokModel extends Model
{
    protected $table = 'kelompok';
    protected $fillable = array('nama_kelompok','ketua_kelompok','bendahara_kelompok','humas_kelompok');
    public function user()
    {
        return $this->hasMany(User::class);
    }
    public function keramba()
    {
        return $this->hasMany(Keramba::class);
    }
    public function produksi()
    {
        return $this->hasMany('App\ProduksiModel');
    }
    public function kelompok()
    {
        return $this->hasMany(Kelompok::class);
    }
}
