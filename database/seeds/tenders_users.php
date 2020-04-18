<?php

use Illuminate\Database\Seeder;

class tenders_users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $int1 = rand(11,19);
        $int2 = rand(6,17);
        DB::table('tenders_users')->insert([

            'tender_id' => $int1,
            'users_id' => $int2,
        ]);
    }
}
