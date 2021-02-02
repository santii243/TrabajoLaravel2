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
        factory(\App\Requirement::class, 50)->create();
        factory(\App\Offer::class, 50)->create();
        factory(\App\Cicle::class, 50)->create();
        factory(\App\Article::class, 50)->create();
        factory(\App\Applied::class, 50)->create();
    }
}
