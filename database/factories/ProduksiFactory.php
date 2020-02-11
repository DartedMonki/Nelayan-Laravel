<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'nama_ikan'=>$faker->text(20),
        'panjang_ikan'=>$faker->number(5),
        'jumlah_ikan'=>$faker->number(5),
        'tanggal_tebar'=>$faker->date(5),
        'keramba_id'=>$faker->number(5),
        'user_id'=>$faker->number(5),
    ];
});
