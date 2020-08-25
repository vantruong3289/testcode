<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\RoomChat;
use App\User;
use Faker\Generator as Faker;

$factory->define(RoomChat::class, function (Faker $faker) {
    return [
        'name' => $faker->text(100),
        'user_id' => User::get()->random()->id
    ];
});
