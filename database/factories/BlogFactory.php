<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Blog;
use Faker\Generator as Faker;

$factory->define(Blog::class, function (Faker $faker) {
    return [
        'product_name' => $faker->sentence,
        'review' => $faker->paragraph,
        'vote' => $faker->unique()->randomNumber

    ];
});
