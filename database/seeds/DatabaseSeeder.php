<?php

use App\{Tendor,User, TenderUser};
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
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
    }
}
