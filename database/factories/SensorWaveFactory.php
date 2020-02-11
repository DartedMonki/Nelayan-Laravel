<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(SensorWaveModel::class, function (Faker $faker) {
    return [
        'time'=>$faker->text(5),
        'date'=>$faker->date(5),
        'ketinggian_air'=>$faker->text(50)
    ];
});
