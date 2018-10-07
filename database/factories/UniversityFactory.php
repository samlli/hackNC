<?php

use Faker\Generator as Faker;

$factory->define(App\University::class, function (Faker $faker) {
  return [
    'name' => $faker->sentence($nbWords = 7, $variableNbWords = true),
    'country' => $faker->country(),
    'state' => $faker->state(),
    'city' => $faker->city(),
  ];
});
