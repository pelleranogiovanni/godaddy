<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    $title = $faker->sentence(4);
    return [
        'user_id' => rand(1,6),
        'category_id' => rand(1,5),
        'title' => $title,
        'description' => $faker->text(120),
        'body' => $faker->text(500),
        'author'=>$faker->name(),
    

    ];
});
