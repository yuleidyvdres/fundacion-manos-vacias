<?php

use Faker\Generator as Faker;
use App\User;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    static $password;

    return [
        'id' => $faker->numberBetween($min = 1000000, $max = 30000000),
        'nombre' => $faker->firstName,
        'apellido' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\donacion::class, function (Faker $faker) {

    $nombre = [
        "Ibritumomab 10mg",
        "Ibritumomab 50mg",
        "Ibritumomab 100mg",
        "Rituximab 2mg",
        "Rituximab 4mg",
        "Rituximab 6mg",
        "Tositumomab 100mg",
        "Tositumomab 500mg",
        "Trastuzumab 100mg"
    ];

    $tipo = [
        "Medicamento",
        "Insumo"
    ];
    return [
        'nombre' => $nombre[array_rand($nombre)],
        'tipo' => $tipo[array_rand($tipo)],
    ];
});
