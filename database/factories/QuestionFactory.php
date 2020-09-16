<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Question;
use Faker\Generator as Faker;

$factory->define(Question::class, function (Faker $faker) {
    return [
        'content'=>$faker->text,
        'topic_id'=>random_int(1,24),
        'difficult_id'=>random_int(1,3),
    ];
});
