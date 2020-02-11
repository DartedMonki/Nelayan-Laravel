<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(KerambaModel::class, function (Faker $faker) {
    return [
        'nama_keramba'=>$faker->text(5),
        'panjang_keramba'=>$faker->number(5),
        'lebar_keramba'=>$faker->number(5),
        'kapasitas_keramba'=>$faker->number(5),
        'kelompok_id'=>$faker->number(5),
        'user_id'=>$faker->number(5),
    ];
});
