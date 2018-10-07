<?php

use Faker\Generator as Faker;

$factory->define(App\Course::class, function (Faker $faker) {
  return [
    'university_id' => $faker->numberBetween($min = 0, $max = 99),
    'department_abrv' => $faker->text($maxNbChars = 5),
    'course_number' => $faker->randomNumber($nbDigits = 3),
  ];
});
