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
    static $user_id = 1;
    static $role_id = 1;

    return [
        'user_id' => $user_id++,
        'role_id' => $role_id++,
        'created_at' => date('Y-m-d H:i:s'),
        
    ];
});
