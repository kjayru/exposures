<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Category;
$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'price'=>$faker->randomNumber(2),
        'excerpt'=>$faker->text($maxNbChars = 200),
        'description'=>$faker->text($maxNbChars = 1000),
        'title' => $faker->name,
        'slug' => Str::slug($faker->name),
        'imagen' => $faker->image('public/storage/products',800,600, 'business', false),
        'category_id'=>Category::all()->random()->id,
    ];
});
