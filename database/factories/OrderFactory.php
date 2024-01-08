<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'product_id' => $faker->rand(1,10),
        'quantity' => $faker->rand(1,5),
        'amount_paid' => 0,
    ];
});
