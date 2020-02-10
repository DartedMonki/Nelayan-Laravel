<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class KelompokResources extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);

        return [
            'id'=> $this->id,
            'nama_kelompok'=>$this->nama_kelompok,
            'ketua_kelompok'=>$this->ketua_kelompok,
            'bendahara_kelompok'=>$this->bendahara_kelompok,
            'humas_kelompok'=>$this->humas_kelompok
        ];
    }
    public function with($request){
        return[
            'version'=> '1.0.0',
            'author_url'=> url('http://localhost/nelayan-laravel')
        ];
    }
}
