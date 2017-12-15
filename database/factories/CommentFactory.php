<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    $user= factory('App\User')->create();
    $post= factory('App\Post')->create();


    return [
        'body' => $faker->paragraph,
        'user_id'=> $user->id,
        'post_id'=> $post->id,
    ];
});
