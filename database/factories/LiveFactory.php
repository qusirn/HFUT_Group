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

$factory->define(App\Model\Live::class, function (Faker $faker) {
    return [
        'l_headling' => '这里是标题',
        'l_cover' => 'img/test/test.jpeg', // secret
        'l_code' => str_random(10)->unique(),
        'l_classify' => '这里是分类名',
        'l_camera' => 'img/head tiny/jenny.jpg',
        'l_looker_num' => 100,
        'l_is_broadcast' => false,
        'l_is_pause' => false,
        't_id' => function () {
            return factory(App\Model\Teacher::class)->create()->id;
        },
    ];
});
