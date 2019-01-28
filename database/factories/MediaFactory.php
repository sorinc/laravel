<?php

use Faker\Generator as Faker;

$factory->define(App\Media::class, function (Faker $faker) {
    return [
        'filename' => '13b73edae8443990be1aa8f1a483bc27.png',
        'original_filename' => '13b73edae8443990be1aa8f1a483bc27.png',
        'mime_type' => 'png',
    ];
});
