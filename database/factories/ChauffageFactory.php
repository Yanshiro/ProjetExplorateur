<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        "temperatureChauffage"=> rand(0,50),
    ];
});
