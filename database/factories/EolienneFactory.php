<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        "etatEolienne"=> rand(0,100)
    ];
});
