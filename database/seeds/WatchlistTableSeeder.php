<?php

use Illuminate\Database\Seeder;

class WatchlistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $factory->define(App\Watchlist::class, function (Faker $faker)) {
          return [
            'user_id' => $faker->numberBetween($min = 0, $max = 99),
            'isbn' => $faker->isbn10(),
            'max_price' => $faker->numberBetween($min = 0, $max = 300),
            'worst_condition_id' => $faker->numberBetween($min = 0, $max = 99),
          ];
        });

    }
}
