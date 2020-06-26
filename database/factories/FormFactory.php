<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Forms;
use Faker\Generator as Faker;

$factory->define(Forms::class, function (Faker $faker) {
    return [
        'name' => $faker->text(10),
        'surname' => $faker->text(10),
        'patronymic' => $faker->text(10),
        'address' => $faker->text(10),
        'maritalstatus' => $faker->numberBetween(0,1),
    ];
});
