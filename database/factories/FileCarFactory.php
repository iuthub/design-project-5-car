<?php

use Faker\Generator as Faker;
use App\File;

$factory->define(File::class, function (Faker $faker) {
    return [
        'type' => 'car',
        'path' => $faker->imageUrl(200, 300),
        'value_id' => $faker->unique()->numberBetween($min = 1, $max = 210)
    ];
});
