<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Form;
use Faker\Generator as Faker;

$factory->define(Form::class, function (Faker $faker) {
    return [
        'image' => $faker->imageUrl(640, 480),
        'name' => $faker->text(200),
        'user_id' => User::get()->random()->id,
    ];
});
