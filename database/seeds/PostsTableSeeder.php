<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 30; $i++) {
            Post::create([
            'post_title' => str_random(18),
            'body' => str_random(120),
            'author_id'=>rand(1,5),
            'image'=>rand(1,10).'.png',
            'category_id'=>rand(1,6),
            ]);
        }
    }
}
