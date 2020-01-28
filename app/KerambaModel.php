<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\KelompokModel as Kelompok;
use App\ProduksiModel as Produksi;

class KerambaModel extends Model
{
    protected $table = 'keramba';
    protected $fillable = array('nama_keramba','panjang_keramba','lebar_keramba','kapasitas_keramba','kelompok_id','user_id');
    public function kelompok()
    {
        return $this->belongsTo(Kelompok::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function produksi()
    {
        return $this->hasOne(Produksi::class, 'keramba_id');
    }
}
