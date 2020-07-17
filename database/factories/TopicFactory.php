<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Topic;
// use App\Subject;
use Faker\Generator as Faker;

$factory->define(Topic::class, function (Faker $faker) {
    return [
        'name'=>$faker->text,
        'subject_id'=> '1'
    ];
});
