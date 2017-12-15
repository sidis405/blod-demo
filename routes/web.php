<?php

// \Auth::loginUsingId(1);

Route::get('/', 'PostsController@index');
Route::get('posts/create', 'PostsController@create');
Route::get('posts/{post}/edit', 'PostsController@edit');
Route::patch('posts/{post}', 'PostsController@update');


Route::get('posts/{post}', 'PostsController@show');


Route::post('posts', 'PostsController@store');

Route::post('posts/{post}/comments', 'CommentsController@store');

// Model Post
// migration create_posts_table
// Contrroller PostsController
// view


// REST
// Restful Controller
// @index - GET - /posts
// @show - GET - /posts/{id}
// @create - GET - /posts/create
// @store - POST - /posts
// @edit - GET - /posts/{id}/edit
// @update - PATCH - /posts/{id}
// @destroy - DELETE - /posts/{id}
