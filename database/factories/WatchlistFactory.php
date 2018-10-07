<?php

use Faker\Generator as Faker;

$factory->define(App\Watchlist::class, function (Faker $faker) {
  return [
    'user_id' => $faker->numberBetween($min = 0, $max = 99),
    'isbn' => $faker->isbn10(),
    'max_price' => $faker->numberBetween($min = 0, $max = 300),
    'worst_condition_id' => $faker->numberBetween($min = 0, $max = 99),
  ];
});
