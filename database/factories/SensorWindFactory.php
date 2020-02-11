<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(SensorWindModel::class, function (Faker $faker) {
    return [
        'time'=>$faker->text(5),
        'date'=>$faker->date(5),
        'arah_angin'=>$faker->text(50),
        'kecepatan_angin'=>$faker->text(50)
    ];
});
