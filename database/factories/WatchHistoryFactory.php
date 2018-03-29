<?php

use Faker\Generator as Faker;

$factory->define(App\Model\WatchHistory::class, function (Faker $faker) {
    return [
        's_id' => function () {
            return factory(App\Model\Student::class)->create()->id;
        },
        'v_id' => function () {
            return factory(App\Model\Video::class)->create()->id;
        },
    ];
});
