<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        "name" => $faker->title,
        "value" => $faker->randomFloat($nbMaxDecimals = 2, $min = 30, $max = 300),
        "author_id" => $faker->randomDigitNotNull
    ];
});
