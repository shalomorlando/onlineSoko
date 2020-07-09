<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(User::class, function (Faker $faker) {
    return [
        'username' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
        'phone_number' => $faker->tollFreePhoneNumber,
        'avatar' => 'avatar.jpg',
    ];
});

$factory->define(App\Order::class, function (Faker $faker) {
    return [

        'address' => 'Nairobi',
        'total' => $faker->numberBetween($min = 1000, $max = 5000),
        'status' => 1,        
        'is_delivery' => $faker->numberBetween($min = 0, $max = 0),
        'user_id' => $faker->numberBetween($min = 1, $max = 3),
        'store_id' =>  $faker->numberBetween($min = 1, $max = 2)
    ];
});
