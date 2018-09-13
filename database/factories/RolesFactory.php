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

$factory->define(App\Models\Roles::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement($array = array ('superadmin', 'admin' , 'president' , 'vice_president' , 'finance_manager' , 'co_finance_manager' , 'executive_member' , 'ex_member' , 'member' , 'secretary' , 'co_secretary')),
        'description' => $faker->unique()->paragraph,
        'created_at' => date('Y-m-d H:i:s'),
        
    ];
});
