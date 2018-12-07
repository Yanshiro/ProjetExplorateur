<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Alimentation::class, function (Faker $faker) {
    return [
		'electricite' => rand(0,100),
        'gaz' => rand(0,100),
        'eau' => rand(0,100)
        ]; 
});
