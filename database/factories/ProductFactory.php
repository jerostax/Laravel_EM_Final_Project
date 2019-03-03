<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'Nom' => $faker->sentence(),
        'Description' => $faker -> paragraph(),
        'Prix' => $faker -> randomDigit(),
        'status' => $faker -> numberBetween($min = 1, $max = 2)
    ];
});
