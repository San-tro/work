<?php

use Illuminate\Database\Seeder;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $int1 = rand(1,10);
        DB::table('users')->insert([

            'name' => str_random(10),
            'surname' => str_random(10),
            'patronymic' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => str_random(10),
            'organization_id' => $int1,
            'doc_pack_id' => $int1,
            'role_id' => $int1,
        ]);
    }
}
