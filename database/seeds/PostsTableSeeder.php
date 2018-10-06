<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $factory->define(App\Post::class, function (Faker $faker)) {
          return [
              'user_id' => $faker->numberBetween($min = 0, $max = 99),
              'isbn' => $faker->isbn10,
              'course_id' => $faker->numberBetween($min = 0, $max = 99),
              'price' => $faker->numberBetween($min = 0, $max = 300),
              'condition_id' => $faker->numberBetween($min = 0, $max = 99),
              'notes' => $faker->text($maxNbChars = 250),
          ];
        });

    }
}
