<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Person;
use Faker\Generator as Faker;

$factory->define(Person::class, function (Faker $faker) {
    return [
        'dni' => randomNumber($nbDigits = NULL, $strict = false),
        'gender' => $faker->randomElement(['male', 'female']),
        'first_name' => function (array $employee) {
            return $faker->firstName($employee['gender']);
        },
        'lastName' => $faker->lastname,
        'email' => $faker->unique()->safeEmail,
        'dateBirth' => $faker->date($format = 'Y-m-d', $max = 'now')
    ];
});
