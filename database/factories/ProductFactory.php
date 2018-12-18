<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
      'name' => $faker->word,
      'desc' => $faker->paragraph(1),
  		'price' => $faker->randomFloat(2, 1000, 30000),
    ];
});
