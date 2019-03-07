<?php

use Faker\Generator as Faker;

$factory->define(App\Event::class, function (Faker $faker) {
    return [
        'titre' => $faker->sentence(),
        'description' => $faker -> paragraph(),
        'prix' => $faker -> randomDigit(),
        'promo' => $faker -> randomDigit(),
        'date' => $faker -> date(),
        'form' => $faker -> word(),
        'status' => $faker -> numberBetween($min = 1, $max = 2)
    ];
});
