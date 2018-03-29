<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Recommend::class, function (Faker $faker) {
    return [
        'r_headling' => '这里是标题',
        'r_cover' => 'img/test/test.jpeg', // secret
        'r_code' => str_random(10)->unique(),
    ];
});
