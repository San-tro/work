<?php

use App\PsyTest;
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
        factory(PsyTest::class, 5)->create();
        /*
        $bool = rand(true, false);
        DB::table('psy_test')->insert([

            'name' => str_random(10),
            'surname' => str_random(10),
            'patronymic' => str_random(10),
            'result' => $bool,
        ]);
        */
    }
}
