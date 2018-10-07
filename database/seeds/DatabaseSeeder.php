<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        factory(App\Condition::class, 99)->create();
        factory(App\Course::class, 99)->create();
        factory(App\PaymentMethod::class, 99)->create();
        factory(App\Post::class, 99)->create();
        factory(App\Transaction::class, 99)->create();
        factory(App\University::class, 99)->create();
        factory(App\User::class, 99)->create();
        factory(App\VerificationCode::class, 99)->create();
        factory(App\Watchlist::class, 99)->create();

    }
}
