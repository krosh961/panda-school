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

        return [
            'name' => $faker->name,
            'email' => $faker->unique()->safeEmail,
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'remember_token' => str_random(10),
        ];
    });

    $factory->defineAs(App\User::class, 'user', function (Faker $faker) {
        $faker = \Faker\Factory::create('ru_RU');
        return [
            'name' => $faker->name,
            'email' => $faker->unique()->email,
            'password' => bcrypt('326598741'),
            'remember_token' => str_random(10),
        ];
    });

    $factory->defineAs(App\User::class, 'admin', function (Faker $faker) {
        $faker = \Faker\Factory::create('ru_RU');
        return [
            'name' => $faker->name,
            'email' => 'admin@admin.ru',
            'password' => bcrypt('326598741'),
            'remember_token' => str_random(10),
        ];
    });


    $factory->defineAs(App\Models\Role::class, 'user', function (Faker $faker) {
        return [
            'name' => 'user',
            'title' => 'Пользователь',
        ];
    });
    $factory->defineAs(App\Models\Role::class, 'admin', function (Faker $faker) {
        return [
            'name' => 'admin',
            'title' => 'Администратор',
        ];
    });

    $factory->defineAs(App\Models\Role::class, 'manager', function (Faker $faker) {
        return [
            'name' => 'manager',
            'title' => 'Менеджер',
        ];
    });




