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

$factory->define(App\Models\Profile::class, function (Faker $faker) {

    return [
        'user_id' => $faker->unique()->numberBetween(1,30),
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'phone' => $faker->unique()->phoneNumber,
        'mobile' => $faker->unique()->randomNumber(),
        'address_1' => $faker->address,
        'address_2' => $faker->address,
        'gender' => $faker->randomElement($array = array ('male', 'female' , 'others')) ,
        'bio' => $faker->paragraph,
        'job_title' => $faker->randomElement($array = array ('student', 'office' , 'business' , 'farming')) ,
        'citizenship' => $faker->unique()->randomNumber(),
        'licence' => $faker->unique()->randomNumber(),
        'family_details' => $faker->paragraph,
        'city' => $faker->city,
        'education' => $faker->word,
        'country_1' => $faker->country,
        'country_2' => $faker->country,
        'post_code' => $faker->postcode,
        'profile_pic' => $faker->word,
        'dob' => $faker->date($format = 'Y-m-d', $max = 'now'),

    ];
});