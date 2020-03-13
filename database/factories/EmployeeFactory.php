<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'dni' => randomNumber($nbDigits = NULL, $strict = false),
        'lastName' => $faker->lastname,
        'firstName' => $faker->firstName($gender = null|'male'|'female'),
        'gender' => $faker->randomDigit,
        'dateBirth' => $faker->date($format = 'Y-m-d', $max = 'now')
    ];
});
