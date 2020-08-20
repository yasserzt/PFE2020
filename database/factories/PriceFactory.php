<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Price;
use App\Models\Hotel;
use Faker\Generator as Faker;

$factory->define(Price::class, function (Faker $faker) {
    return [

        'price' => $faker->randomFloat($nbMaxDecimals = 0, $min = 50, $max = 250), // 48.8932
        'roomCategory' => $faker->randomElement($array = array ('single','double','communicatingRoom')),
        'typePrice'  => $faker->randomElement($array = array ('FULL BOARD','HALF BOARD','NIGHT+BREAKFAST')),
        'idHotel'    => $faker->numberBetween($min = 76, $max = 105), 

    ];
});
