<?php

use Faker\Generator as Faker;

$factory->define(App\categorias::class, function (Faker $faker) {
    return [
       
        'descripcion' => $faker->text(rand(10, 20)),

    ];
});
