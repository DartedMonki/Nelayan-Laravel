<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(SensorHumTempModel::class, function (Faker $faker) {
    return [
        'time'=>$faker->text(5),
        'date'=>$faker->date(5),
        'humidity'=>$faker->text(50),
        'temperature'=>$faker->text(50)
    ];
});
