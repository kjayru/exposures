<?php

use Faker\Generator as Faker;
use App\Page;

$factory->define(App\Page::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'slug' => $faker->lastname,
        'content' => $faker->email,
        

        'slide_id' => App\Slide::all()->random()->id,
        'video_id' => App\Video::all()->random()->id,
       
    ];
});
