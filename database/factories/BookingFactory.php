<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Booking;
use App\Models\Price;
use App\Models\Hotel;
use App\Models\Client;
use Faker\Generator as Faker;

$factory->define(Booking::class, function (Faker $faker) {
    return [
        //
        'idHotel'    => $faker->numberBetween($min = 76, $max = 105), 
        'idPrice'    => Price::all()->random()->idPrice,
        'idClient'   => Client::all()->random()->idClient,
        'roomNumber' => $faker->randomNumber($nbDigits = 1, $strict = true),
        'startDate'  => '2020-05-17 13:37:20',
        'endDate'    => '2020-05-29 02:17:01',

    ];
});
