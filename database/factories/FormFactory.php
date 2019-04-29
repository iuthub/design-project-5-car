<?php

use Faker\Generator as Faker;
use App\Http\Controllers\Site\SiteController;
use App\Form;
use App\User;
use App\Car;

$factory->define(Form::class, function (Faker $faker) {
    $gender = $faker->randomElement(['male', 'female']);

    return [
        'name' => $faker->name($gender),
        'familyname' => $faker->name($gender),
        'passport' => SiteController::getRandomString(),
        'user_id' => User::all()->random()->id,
        'code' => SiteController::getRandomString(),
        'car_id' => Car::all()->random()->id,
        'created_at' => $faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),
        'updated_at' => $faker->dateTimeThisMonth()->format('Y-m-d H:i:s')
    ];
});
