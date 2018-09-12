<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/


$factory->define(App\Models\UserRoles::class, function (Faker $faker) {
    static $number = 1;

    return [
        'user_id' => App\Models\User::inRandomOrder()->first()->id,
        'role_id' => $number++,
        'created_at' => date('Y-m-d H:i:s'),
        
    ];
});
