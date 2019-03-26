<?php

use Faker\Generator as Faker;

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

$factory->define(App\Avatar::class, function (Faker $faker) {
    return [
        'uri' => $faker->imageUrl(50, 50),
        'default' => $faker->boolean(50),
    ];
});
