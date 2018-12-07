<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        "etatPanneauSolaire" => rand(0,100)
    ];
});
