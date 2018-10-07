<?php

use Faker\Generator as Faker;

$factory->define(App\VerificationCode::class, function (Faker $faker) {
  return [
    'buyer_code' => $faker->randomNumber($nbDigits = 4),
    'seller_code' => $faker->randomNumber($nbDigits = 4),
  ];
});
