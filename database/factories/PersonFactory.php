<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Person;
use Faker\Generator as Faker;

$factory->define(Person::class, function (Faker $faker) {
    return [
        'dni' => randomNumber($nbDigits = NULL, $strict = false),
        'gender' => $faker->randomElement(['male', 'female']),
        'first_name' => $faker->firstName,
        'lastName' => $faker->lastname,
        'email' => $faker->unique()->safeEmail,
        'dateBirth' => $faker->date($format = 'Y-m-d', $max = 'now')
    ];
});
