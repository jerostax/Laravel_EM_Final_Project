<?php

use Faker\Generator as Faker;

$factory->define(App\Event::class, function (Faker $faker) {
    return [
        'Titre' => $faker->sentence(),
        'Description' => $faker -> paragraph(),
        'Prix' => $faker -> randomDigit(),
        'Date' => $faker -> dateTime(),
        'status' => $faker -> numberBetween($min = 1, $max = 2)
    ];
});
