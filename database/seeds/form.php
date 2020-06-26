<?php

use App\Forms;
use Illuminate\Database\Seeder;

class form extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Forms::class, 5)->create();
/*
        $int = rand(1,10);
        DB::table('form')->insert([

            'name' => str_random(10),
            'surname' => str_random(10).'@gmail.com',
            'patronymic' => str_random(10),
            'address' => str_random(10),
            'maritalstatus' => str_random(10),
            'organization_id' => $int,
        ]);
*/
    }
}
