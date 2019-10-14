<?php

use Faker\Generator as Faker;

$factory->define(App\Video::class, function (Faker $faker) {
    return [
        'name' => $faker->catchPhrase,
        'link' => 'https://youtu.be/YFD2PPAqNbw',
        'description' =>$faker->text,
       
    ];
});
