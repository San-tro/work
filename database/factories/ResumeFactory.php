<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Resumes;
use Faker\Generator as Faker;

$factory->define(Resumes::class, function (Faker $faker) {
    return [
        'name' => $faker->text(10),
        'surname' => $faker->text(10),
        'patronymic' => $faker->text(10),
        'birthday' => $faker->date('Y-m-d'),
        'lastplacework' => $faker->text(10),
        'vieweducation' => $faker->text(10),
        'course' => $faker->text(10),
        'speciality' => $faker->text(10),
        'institution' => $faker->text(10),
        'endyear' =>$faker->date('Y-m-d'),
        'telephone' => $faker->phoneNumber,
    ];
});
