<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create([
            'name' => 'Html',
           
        ]);
        Tag::create([
            'name' => 'Css',
           
        ]);
        Tag::create([
            'name' => 'Php',
           
        ]);
        Tag::create([
            'name' => 'nodejs',
           
        ]);
        Tag::create([
            'name' => 'Javascript',
           
        ]);
    }
}
