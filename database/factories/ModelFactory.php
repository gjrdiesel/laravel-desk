<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name'           => $faker->name,
        'email'          => $faker->unique()->safeEmail,
        'password'       => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Ticket::class, function (Faker\Generator $faker) {
    static $html;

    return [
        'from_name' => $faker->name,
        'from_mail' => $faker->unique()->safeEmail,
        'subject'   => $faker->sentence,
        'status'    => 'new',
        'html'      => $html = $faker->paragraphs(8, true),
        'text'      => $html,
        'raw'       => '[]',
    ];
});

$factory->define(App\Comment::class, function (Faker\Generator $faker) {
    return [
        'from_name' => $faker->name,
        'from_mail' => $faker->unique()->safeEmail,
        'subject'   => $faker->sentence,
        'html'      => $html = $faker->paragraphs(6, true),
        'text'      => $html,
        'raw'       => '[]',
    ];
});
