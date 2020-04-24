<?php

use Faker\Generator as Faker;
use Modules\Quotes\Models\Quote;

$factory->define(Quote::class, function (Faker $faker) {
    return [
        'author' => $faker->name,
        'quote'  => $faker->sentence,
    ];
});