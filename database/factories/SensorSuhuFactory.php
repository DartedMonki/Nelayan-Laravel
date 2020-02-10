<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\SensorSuhuModel::class, function (Faker $faker) {
    return [
        'suhu_air'=>$faker->numberBetween(20,30),
        'keramba_id'=>$faker->randomDigitNotNull
    ];
});
