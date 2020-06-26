<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PsyTest;
use Faker\Generator as Faker;

$factory->define(PsyTest::class, function (Faker $faker) {
    return [
        'name' => $faker->text(10),
        'surname' => $faker->text(10),
        'patronymic' => $faker->text(10),
        'result' =>  $faker->numberBetween(0,1),
    ];
});
