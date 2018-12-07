<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Adresse::class, function (Faker $faker) {
    return [
		'pulsationCardiaque' => rand(30,250),
        'poid' => rand(30,200),
        'temperature' => rand(-20,50),
        'heureDeSommeil' => $faker->dateTime($max='now',$timezone=null),
		'tension' => rand(20,200)
    ]; 
});
