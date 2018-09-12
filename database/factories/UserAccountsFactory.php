<?php

use Faker\Generator as Faker;

$factory->define(App\Models\UserAccounts::class, function (Faker $faker) {

    static $user_id = 1;
    static $account_id = 1;
    return [
        'user_id' => $user_id++,
        'account_id' => $account_id++,
        'created_at' => date('Y-m-d H:i:s'),
        
    ];
});
