<?php

use App\Tendor;
use Illuminate\Database\Seeder;

class tender extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        factory(Tendor::class, 5)->create();
        /*
        $int1 = rand(1,9);
        $int= mt_rand(0,1262055681);
        $string = date("Y-m-d H:i:s",$int);
        DB::table('tender')->insert([

            'date' => $string,
            'vacancy' => str_random(10),
            'view' => str_random(10),
            'personincharge' => str_random(10),
            'comment' => str_random(15),
            'vacancy_id' => $int1,
        ]);
         */
    }

}
