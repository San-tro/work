<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Vacancys;
use Faker\Generator as Faker;

$factory->define(Vacancys::class, function (Faker $faker) {
    return [
        'organization_id' => function() {
            return factory(App\Organizations::class)->create()->id;
        },
        'direction'  => $faker->text(10),
        'vacancystatus'  => $faker->numberBetween(0,1),
        'contactperson'  => $faker->text(10),
        'manager'  => $faker->name,
        'datestart'  => $faker->date('Y-m-d'),
        'dateend'  => $faker->date('Y-m-d'),
        'wayofeployment'  => $faker->text(10),
    ];
});
