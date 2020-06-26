<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tendor;
use Faker\Generator as Faker;

$factory->define(Tendor::class, function (Faker $faker) {
    return [
        'vacancy_id' => function() {
            return factory(App\Vacancys::class)->create()->id;
        },
        'date'  => $faker->date('Y-m-d'),
        'view' => $faker->text(10),
        'vacancy' => $faker->text(10),
        'personincharge' => $faker->text(10),
        'comment' => $faker->text(50),
    ];
});
