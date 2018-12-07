<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Produit::class, function (Faker $faker) {
    return [
		'label' => $faker->word,
        'quantite' => rand(0,100),
        ]; 
});
