<?php

use Faker\Generator as Faker;
use App\Car;

$factory->define(Car::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(5),
        'description' => $faker->sentence(20),
        'price' => $faker->numberBetween($min = 1000, $max = 10000),
        'publish' => 1
    ];
});
