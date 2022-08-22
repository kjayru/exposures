<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(App\Category::class, function (Faker $faker) {
    $title = $faker->catchPhrase;
    return [
        'name' => $faker->domainWord,
        'title' => $title,
        'slug' => Str::slug($title, '-'),
    ];
});

