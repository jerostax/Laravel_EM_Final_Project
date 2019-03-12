<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'titre' => $faker->sentence(),
        'description' => $faker -> paragraph(),
        'prix' => $faker -> randomDigit(),
        'form' => $faker -> word(),
        'status' => $faker -> numberBetween($min = 1, $max = 2)
    ];
});
