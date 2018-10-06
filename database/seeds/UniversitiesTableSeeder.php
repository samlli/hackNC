<?php

use Illuminate\Database\Seeder;

class UniversitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $factory->define(App\Universities::class, function (Faker $faker)) {
          return [
            'name' => $faker->sentence($nbWords = 7, $variableNbWords = true),
            'country' => $faker->country(),
            'state' => $faker->state(),
            'city' => $faker->city(),
          ];
        });

    }
}
