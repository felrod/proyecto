<?php

use Faker\Generator as Faker;

$factory->define(App\Brand::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->randomElement([
          'Samsung', 'Apple', 'HP', 'Sony', 'Cannon', 'Nikon', 'Midea', 'Dream', 'LG'
        ]),
    ];
});
