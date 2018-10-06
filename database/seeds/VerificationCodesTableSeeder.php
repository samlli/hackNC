<?php

use Illuminate\Database\Seeder;

class VerificationCodesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $factory->define(App\VerificationCode::class, function (Faker $faker)) {
          return [
            'buyer_code' => $faker->randomNumber($nbDigits = 4),
            'seller_code' => $faker->randomNumber($nbDigits = 4),
          ];
        });

    }
}
