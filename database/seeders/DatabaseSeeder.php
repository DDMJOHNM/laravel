<?php

namespace Database\Seeders;

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
       
       $user = \App\Models\User::factory()->create();

       \App\Models\Category::factory()->create();

       \App\Models\Post::factory(10)->create();

        // $work = \App\Models\Category::create([
        //     'name' => 'Work',
        //     'slug' => 'family'
        // ]);

        // \App\Models\Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $work->id, 
        //     'title' => 'My Family Post',
        //     'excerpt' => 'Lorem Ipsem',
        //     'body' => '<p>Lorem Ipsem Body</p>'
        // ]);

        // \App\Models\Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $work->id, 
        //     'title' => 'My Family Post 2',
        //     'excerpt' => 'Lorem Ipsem',
        //     'body' => '<p>Lorem Ipsem Body</p>'
        // ]);
    }
}
