<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'do_air'=>$faker->numberBetween(20,30),
        'keramba_id'=>$faker->randomDigitNotNull
    ];
});
