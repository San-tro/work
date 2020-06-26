<?php

use App\Roles;
use Illuminate\Database\Seeder;

class role extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Roles::class, 5)->create();
    }
}
