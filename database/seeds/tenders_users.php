<?php

use App\{Tendor,User, TenderUser};
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


        $userIds = User::pluck('id')->toArray();
        $tendersIds = Tendor::pluck('id')->toArray();

        $posts = factory(TenderUser::class, 10)->make()->each(function($post) use($userIds, $tendersIds) {
            $post->users_id = array_random($userIds);
            $post->tender_id = array_random($tendersIds);
        })->toArray();

        TenderUser::insert($posts);
        /*
        $int1 = rand(11,19);
        $int2 = rand(6,17);
        DB::table('tenders_users')->insert([

            'tender_id' => $int1,
            'users_id' => $int2,
        ]);
        */
    }
}
