<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $factory->define(App\Course::class, function (Faker $faker)) {
          return [
            'university_id' => $faker->numberBetween($min = 0, $max = 99),
            'department_abrv' => $faker->text($maxNbChars = 4),
            'course_number' => $faker->randomNumber($nbDigits = 3),
          ];
        });

    }
}
