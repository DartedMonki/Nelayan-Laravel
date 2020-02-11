<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(PemindahanModel::class, function (Faker $faker) {
    return [
        'panjang_ikan'=>$faker->number(5),
        'jumlah_ikan'=>$faker->number(5),
        'tanggal_pindah'=>$faker->date(5),
        'keramba_sebelum'=>$faker->number(5),
        'keramba_sesudah'=>$faker->number(5),
        'produksi_id'=>$faker->number(5),
        'user_id'=>$faker->number(5)
    ];
});
