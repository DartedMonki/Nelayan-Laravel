<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\ApiKelompokModel::class, function (Faker $faker) {
    return [
        'nama_kelompok'=>$faker->text(50),
        'ketua_kelompok'=>$faker->text(50),
        'bendahara_kelompok'=>$faker->text(50),
        'humas_kelompok'=>$faker->text(50)
    ];
});
