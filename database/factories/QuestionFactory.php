<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Question;
use Faker\Generator as Faker;

$factory->define(App\Question::class, function (Faker $faker) {
    return [
        //
        'body' => $faker->paragraph($nbSentences = 2, $variableNbSentences = true),
    ];
});
