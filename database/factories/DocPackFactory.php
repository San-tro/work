<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\DocPack;
use Faker\Generator as Faker;

$factory->define(DocPack::class, function (Faker $faker) {
    return [
        'form_id' => function() {
            return factory(App\Forms::class)->create()->id;
        },
        'resume_id' => function() {
            return factory(App\Resumes::class)->create()->id;
        },
        'psy_test_id' => function() {
            return factory(App\PsyTest::class)->create()->id;
        },
    ];
});
