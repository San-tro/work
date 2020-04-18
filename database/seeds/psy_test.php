<?php

use Illuminate\Database\Seeder;

class psy_test extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bool = rand(true, false);
        DB::table('psy_test')->insert([

            'name' => str_random(10),
            'surname' => str_random(10),
            'patronymic' => str_random(10),
            'result' => $bool,
        ]);
    }
}
