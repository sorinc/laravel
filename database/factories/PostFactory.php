<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'content' => $faker->text,
        'author_id' => $faker->unique()->numberBetween(5, App\User::count()),
        'media_id' => $faker->unique()->numberBetween(1, App\Media::count()),
        'posted_at' =>  Carbon\Carbon::now(),
    ];
});
