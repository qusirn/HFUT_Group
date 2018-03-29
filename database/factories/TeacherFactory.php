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

$factory->define(App\Model\Teacher::class, function (Faker $faker) {
    return [
        't_name' => $faker->name,
        't_passwd' => 'secret', // secret
        't_header' => 'img/head tiny/helen.jpg',
        't_tel' => str_random(11)>unique(),
        't_email' => $faker->unique()->safeEmail,
        't_company' => 'HFUT',
    ];
});
