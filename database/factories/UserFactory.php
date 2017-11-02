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

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
    	'user_id' => 11111,
    	'username' => str_random(10),
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'name' => $faker->firstName .' '.$faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->phoneNumber,
        'dob' => $faker->dateTime,
        'pic' => '0',
        'bio' => '0',
        'Gender' => 'M',
        'country' => $faker->country,
        'state' => 'NY',
        'city' => $faker->city,
        'zip' => str_random(7),
        'facebook' => str_random(20),
        'twitter' => str_random(20),
        'instagram' => str_random(20),
        'snapchat' => str_random(20),
        'linkedin' => str_random(20),
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'pin' => str_random(4),
        'last_login' => $faker->dateTime,
    ];
});
