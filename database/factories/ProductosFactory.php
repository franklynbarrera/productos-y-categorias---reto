<?php

use Faker\Generator as Faker;

$factory->define(App\productos::class, function (Faker $faker) {
    return [
        'nombre' => $faker->text(rand(10, 40)),
        'descripcion' => $faker->text(rand(100, 150)),
        'precio' => rand(5, 25),
        'categoriaId'=>rand(1, 10)  //son 10 categorias las que creare

    ];
});
