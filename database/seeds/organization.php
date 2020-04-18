<?php

use Illuminate\Database\Seeder;

class organization extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $int = rand(1,10);
        DB::table('organization')->insert([

            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'subdivision' => str_random(10),
            'directors' => str_random(10),
            'position_id' => $int,
        ]);
    }
}
