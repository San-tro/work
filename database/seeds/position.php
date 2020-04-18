<?php

use Illuminate\Database\Seeder;

class position extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('position')->insert([
            'name' => str_random(10),
        ]);
    }
}
