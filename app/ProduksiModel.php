<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\KerambaModel as Keramba;
use App\User as User;
use App\KelompokModel;

class ProduksiModel extends Model
{
    protected $table = 'produksi';
    protected $fillable = array('nama_ikan','jumlah_ikan','panjang_ikan','tanggal_cuci','tanggal_tebar','tanggal_pindah','status_panen','user_id','keramba_id','kelompok_id');
    protected $dates = ['tanggal_cuci','tanggal_tebar','tanggal_pindah','tanggal_panen'];
    public function keramba()
    {
        return $this->belongsTo(Keramba::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function Kelompok()
    {
        return $this->belongsTo(KelompokModel::class);
    }
}
