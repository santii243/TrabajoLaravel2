<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class, 50)->create();
        factory(\App\requirement::class, 50)->create();
        factory(\App\offer::class, 50)->create();
        factory(\App\cicle::class, 50)->create();
        factory(\App\article::class, 50)->create();
        factory(\App\applied::class, 50)->create();
    }
}
