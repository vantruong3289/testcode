<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
namespace Truongpv\Question;

use App\Question;
use App\User;
use Faker\Generator as Faker;

$factory->define(Question::class, function (Faker $faker) {
    return [
        'image' => $faker->imageUrl(640, 480),
        'name' => $faker->text(200),
        'user_id' => User::get()->random()->id,
    ];
});
