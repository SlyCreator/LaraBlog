<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'category_name' => 'Graphics Design',
           
        ]);
        Category::create([
            'category_name' => 'Web Dev',
           
        ]);
        Category::create([
            'category_name' => 'Mobile Dev',
           
        ]);
        Category::create([
            'category_name' => 'AI and ML',
           
        ]);
        Category::create([
            'category_name' => 'BlockChain',
           
        ]);
        Category::create([
            'category_name' => 'Java',
           
        ]);

        
    }
}
