<?php

use Faker\Generator as Faker;

$factory->define(App\Slide::class, function (Faker $faker) {
    return [
        'file' => $faker->image('public/storage/slide',1400,600, 'business', false),
        'link' => $faker->url,
        
        
       
    ];
});
