<?php

use Illuminate\Database\Seeder;

class vacancy extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $int1 = rand(1,9);
        $bool = rand(true, false);
        $int= mt_rand(0,1262055681);
        $string = date("Y-m-d H:i:s",$int);
        DB::table('vacancy')->insert([

            'direction' => str_random(10),
            'vacancystatus' => $bool,
            'contactperson' => str_random(10),
            'manager' => str_random(10),
            'datestart' => $string,
            'dateend' => $string,
            'wayofeployment' => str_random(10),
            'organization_id' => $int1,
        ]);
    }
}
