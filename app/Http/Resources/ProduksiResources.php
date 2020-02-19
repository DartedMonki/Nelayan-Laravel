<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProduksiResources extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);

        return [
            'id'=> $this->id,
            'nama_ikan'=>$this->nama_ikan,
            'panjang_ikan'=>$this->panjang_ikan,
            'jumlah_ikan'=>$this->jumlah_ikan,
            'tanggal_tebar'=>$this->tanggal_tebar,
            'tanggal_panen'=>$this->tanggal_panen,
            'status_panen'=>$this->status_panen,
            'keramba_id'=>$this->keramba_id,
            'user_id'=>$this->user_id,
             'kelompok_id'=>$this->kelompok_id
        ];
    }
    public function with($request){
        return[
            'version'=> '1.0.0',
            'author_url'=> url('http://localhost/nelayan-laravel')
        ];
    }
}
