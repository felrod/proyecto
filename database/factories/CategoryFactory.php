<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
      'name' => $faker->unique()->randomElement([
        'Camaras', 'Celulares', 'Gaming', 'Informatica', 'TV', 'Aires y Calefacción', 'Cocina', 'Lavado', 'Oficina'
      ]),
    ];
});
