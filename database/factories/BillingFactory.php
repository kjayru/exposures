<?php

use Faker\Generator as Faker;
use App\Billing;

$factory->define(App\Billing::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'lastname' => $faker->lastname,
        'email' => $faker->email,
        'phone' => $faker->e164PhoneNumber,

        'type_address' => $faker->randomElement([Billing::CASA, Billing::INTERIOR, Billing::DEPARTAMENTO]),
        'address1' => $faker->address,
        'zipcode' => $faker->postcode,
        'status' => $faker->randomElement([Billing::ACTIVO, Billing::DESACTIVO]),
        'city_id' => App\City::all()->random()->id,
       
    ];
});
