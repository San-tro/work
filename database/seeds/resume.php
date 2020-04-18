<?php

use Illuminate\Database\Seeder;

class resume extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $int= mt_rand(0,1262055681);
        $string = date("Y-m-d H:i:s",$int);
        $phone = '000-000-0000';
        $phone = sprintf('%s%04d', substr($phone, 0, -4), rand(0, 9999));
        DB::table('resume')->insert([

            'name' => str_random(10),
            'surname' => str_random(10),
            'patronymic' => str_random(10),
            'birthday' => $string,
            'lastplacework' => str_random(10),
            'vieweducation' => str_random(10),
            'course' => str_random(10),
            'speciality' => str_random(10),
            'institution' => str_random(10),
            'endyear' => $string,
            'telephone' => $phone,
        ]);
    }
}
