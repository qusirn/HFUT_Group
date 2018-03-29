<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Audience::class, function (Faker $faker) {
    return [
        's_id' => function () {
            return factory(App\Model\Student::class)->create()->id;
        },
        'l_id' => function () {
            return factory(App\Model\Live::class)->create()->id;
        },
    ];
});
