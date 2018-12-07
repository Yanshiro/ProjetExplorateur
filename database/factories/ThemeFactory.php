<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Theme::class, function (Faker $faker) {
    return [
		'nom' => $faker->name,
        ]; 
});
