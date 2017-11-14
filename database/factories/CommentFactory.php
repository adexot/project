<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'ticket_id' => $faker->numberBetween(1,3),
        'message' => $faker->realText()
    ];
});
