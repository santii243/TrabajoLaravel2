<?php

use Faker\Generator as Faker;

$factory->define(App\Cicle::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
        'description' => $faker->paragraph,
    ];
});
