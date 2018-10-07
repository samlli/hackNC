<?php

use Faker\Generator as Faker;

$factory->define(App\Transaction::class, function (Faker $faker) {
  return [
    'buyer_id' => $faker->numberBetween($min = 0, $max = 99),
    'seller_id' => $faker->numberBetween($min = 0, $max = 99),
    'post_id' => $faker->numberBetween($min = 0, $max = 99),
    'payment_method_id' => $faker->numberBetween($min = 0, $max = 99),
    'verification_code_id' => $faker->numberBetween($min = 0, $max = 99),
  ];
});
