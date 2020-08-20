<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Hotel;
use App\Models\Price;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

$factory->define(Hotel::class, function (Faker $faker) {
  $pwd = '123456';
  $user = factory('App\User')->create([
    'username' => $faker->userName,
    'email' => $faker->unique()->safeEmail,
    'email_verified_at' => now(),
    'typeAccount' => $faker->randomElement($array = array ('hotel')),
    'password' => Hash::make($pwd), // password
   ]);

   
    return [
        //
        'hotelName' => $faker->company,
        'region' =>
        $faker->randomElement($array = array (
          'Ariana',
          'Beja',
          'BenArous',
          'Bizerte',
          'Djerba',
          'Gabes',
          'Gafsa',
          'Jendouba',
          'Kairouan',
          'Kasserine',
          'Kebili',
          'Kef',
          'Mahdia',
          'Manouba',
          'Monastir',
          'Nabeul',
          'Sfax',
          'SidiBouzid',
          'Silana',
          'Sousse',
          'Tataouine',
          'Tozuer',
          'Tunis',
          'Zaghouan',
        )),

        'address' => $faker->randomElement($array = array (
            'Ariana',
            'Beja',
            'BenArous',
            'Bizerte',
            'Djerba',
            'Gabes',
            'Gafsa',
            'Jendouba',
            'Kairouan',
            'Kasserine',
            'Kebili',
            'Kef',
            'Mahdia',
            'Manouba',
            'Monastir',
            'Nabeul',
            'Sfax',
            'SidiBouzid',
            'Silana',
            'Sousse',
            'Tataouine',
            'Tozuer',
            'Tunis',
            'Zaghouan',
        )),
        'stars' => $faker->numberBetween($min = 1, $max = 6),
        'managerName' => $faker->name,
        'phone' => $faker->randomNumber($nbDigits = 8, $strict = true),
        'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true) ,
        'url' => $faker->url,
        'idUser' =>  $user->id,
        'statu' => $faker->numberBetween($min = 0, $max = 1),

    ];
});
