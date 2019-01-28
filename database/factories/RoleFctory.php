<?php

use Faker\Generator as Faker;

$factory->define(App\Role::class, function (Faker $faker) {
    return [
        'name' => ['Administrator', 'Publisher'][rand(0,2)],
    ];
});
