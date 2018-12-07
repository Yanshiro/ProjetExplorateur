<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        "temperateureVentilateur"=>rand(0,30)
    ];
});
