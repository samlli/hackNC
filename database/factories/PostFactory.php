<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
  return [
      'user_id' => $faker->numberBetween($min = 0, $max = 99),
      'isbn' => $faker->isbn10,
      'course_id' => $faker->numberBetween($min = 0, $max = 99),
      'price' => $faker->numberBetween($min = 0, $max = 300),
      'condition_id' => $faker->numberBetween($min = 0, $max = 99),
      'notes' => $faker->text($maxNbChars = 250),
  ];
});
