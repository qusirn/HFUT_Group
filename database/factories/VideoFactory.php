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
        'v_headling' => '这里是标题',
        'v_cover' => 'img/test/test.jpeg', // secret
        'v_code' => str_random(10)->unique(),
        'v_classify' => '这里是分类名',
        'v_looker_num' => 100,
        't_id' => function () {
            return factory(App\Model\Teacher::class)->create()->id;
        },
    ];
});
