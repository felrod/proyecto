<?php

use Faker\Generator as Faker;

$factory->define(App\Status::class, function (Faker $faker) {
    return [
      'name' => $faker->unique()->randomElement([
        'None', 'New', 'Offer', 'Hot'
      ]),
    ];
});
