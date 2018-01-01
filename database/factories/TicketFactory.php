<?php

use Faker\Generator as Faker;

$factory->define(App\Ticket::class, function (Faker $faker) {
    return [
        'unique_id' => str_random(10),
        'title' => $faker->sentence(10),
        'user_id' => rand(1, 2),
        'status' => 'pending',
        'description' => $faker->sentence(10),
        'category_id' => $faker->numberBetween(1,3),
        'priority' => 'low'
    ];
});
