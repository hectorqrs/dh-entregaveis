<?php

use Faker\Generator as Faker;

$factory->define(App\Movie::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'awards' => $faker->randomDigitNotNull,
        'release_date' => $faker->dateTime,
        'length' => $faker->randomDigitNotNull($min = 120, $max = 400),
        'genre_id' => $faker->numberBetween($min=1,$max=12),
        'director_id' => $faker->numberBetween($min = 1, $max = 10)
    ];
});
