<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Staffs;
use Faker\Generator as Faker;

$factory->define(Staffs::class, function (Faker $faker) {
    return [
        'name' => $faker->text(10),
        'surname' => $faker->text(10),
        'patronymic' => $faker->text(10),
    ];
});
