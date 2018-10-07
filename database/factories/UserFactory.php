<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
  return [
    'firstname' => $faker->firstname,
    'lastname' => $faker->lastname,
    'email' => $faker->email,
    'password' => $faker->password,
    'phone_number' => $faker->randomNumber($nbDigits = 9),
    'university' => $faker->numberBetween($min = 0, $max = 99),
  ];
});
