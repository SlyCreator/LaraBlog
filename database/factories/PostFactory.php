<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'post_title' => $faker->sentence,
        'body' => $faker->paragraph,
        'author_id'=>rand(1,5),
        'image'=>rand(1,10).'.png',
        'category_id'=>rand(1,6),

        //factory(App\Post::class, 20)->create();
    ];
});

