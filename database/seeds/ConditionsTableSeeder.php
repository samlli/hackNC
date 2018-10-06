<?php

use Illuminate\Database\Seeder;

class ConditionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $factory->define(App\Condition::class, function (Faker $faker)) {
          return [
            'condition' => $faker->word,
        });

    }
}
