<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Accounts::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->word,
        'description' => $faker->unique()->paragraph,
        'created_at' => date('Y-m-d H:i:s'),
        
    ];
});
