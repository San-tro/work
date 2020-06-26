<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\TenderUser;
use Faker\Generator as Faker;

$factory->define(TenderUser::class, function (Faker $faker) {
    return [
        'users_id' => function() {
            return factory(App\User::class)->create()->id;
        },
        'tender_id' => function() {
            return factory(App\Tendor::class)->create()->id;
        },
    ];
});
