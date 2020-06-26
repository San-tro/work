<?php

use App\Staffs;
use Illuminate\Database\Seeder;

class staff extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Staffs::class, 5)->create();
        /*
        $int = rand(1,9);
        DB::table('staff')->insert([

            'name' => str_random(10),
            'surname' => str_random(10),
            'patronymic' => str_random(10),
            'organization_id' => $int,
        ]);
        */
    }
}
