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

$factory->define(App\Model\Student::class, function (Faker $faker) {
    return [
        's_username' => $faker->name,
        's_passwd' => 'secret', // secret
        's_header' => 'img/head tiny/elliot.jpg',
        's_tel' => str_random(11)>unique(),
        's_email' => $faker->unique()->safeEmail,
        's_school' => 'HFUT',
        's_major' => 'SoftWare Enginner',
        's_code' => '201521'+str_random(4)->unique(),
    ];
});
