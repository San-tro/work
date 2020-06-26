<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Organizations;
use Faker\Generator as Faker;

$factory->define( Organizations::class, function (Faker $faker) {
    return [
        'position_id' => function() {
            return factory(App\Positions::class)->create()->id;
        },
        'staff_id' => function() {
            return factory(App\Staffs::class)->create()->id;
        },
        'name' => $faker->text(10),
        'email' => $faker->unique()->safeEmail,
        'directors' => $faker->text(10),
        'subdivision' => $faker->text(10),
    ];
});
