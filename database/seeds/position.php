<?php

use App\Positions;
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
        factory(Positions::class, 5)->create();
        /*
        DB::table('position')->insert([
            'name' => str_random(10),
        ]);
        */
    }
}
