<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\KelompokModel::class, function (Faker $faker) {
    return [
        'nama_kelompok'=>$faker->text(5),
        'ketua_kelompok'=>$faker->text(5),
        'bendahara_kelompok'=>$faker->text(5),
        'humas_kelompok'=>$faker->text(5)
    ];
});
