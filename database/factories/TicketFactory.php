<?php

use Faker\Generator as Faker;

$factory->define(App\Ticket::class, function (Faker $faker) {
    return [
        'unique_id' => str_random(10),
        'title' => $faker->sentence(10),
        'state_id' => $faker->numberBetween(1,3),
        'category_id' => $faker->numberBetween(1,3)
    ];
});
