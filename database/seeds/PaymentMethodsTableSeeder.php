<?php

use Illuminate\Database\Seeder;

class PaymentMethodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $factory->define(App\PaymentMethod::class, function (Faker $faker)) {
          return [
            'payment_method' => $faker->word(),
          ];
        });

    }
}
