<?php

use App\DocPack;
use Illuminate\Database\Seeder;

class doc_pack extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(DocPack::class, 5)->create();
        /*
        $int1 = rand(1,10);
        DB::table('doc_pack')->insert([
            'form_id' => $int1,
            'psy_test_id' => $int1,
            'resume_id' => $int1,
        ]);
        */
    }
}
