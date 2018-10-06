<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $factory->define(App\User::class, function (Faker $faker)) {
        return [
          'firstname' => $faker->firstname,
          'lastname' => $faker->lastname,
          'email' => $faker->email,
          'password' => $faker->password,
          'phone_number' => $faker->randomNumber($nbDigits = 10),
          'university' => $faker->numberBetween($min = 0, $max = 100);
        ]
      }

    }
}
