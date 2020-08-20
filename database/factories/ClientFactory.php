<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
  $pwd = '123456';
  $user = factory('App\User')->create([
    'username' => $faker->userName,
    'email' => $faker->unique()->safeEmail,
    'email_verified_at' => now(),
    'typeAccount' => $faker->randomElement($array = array ('client')),
    'password' => Hash::make($pwd), // password
   ]);
    return [
        //
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'country' => $faker->country,
        'region' => $faker->state,
        'city' => $faker->city,
        'address' => $faker->address,
        'phone' => $faker->randomNumber($nbDigits = 8, $strict = true),
        'postalCode' => $faker->randomNumber($nbDigits = 6, $strict = true),
        'idUser' => $user->id,
    ];
});
