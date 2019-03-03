<?php

use Faker\Generator as Faker;

$factory->define(App\Partner::class, function (Faker $faker) {
    return [
        'Nom' => $faker->sentence(),
        'Description' => $faker -> paragraph()
    ];
});
