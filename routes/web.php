<?php


Route::get('/', 'PostsController@index');
Route::get('/posts/{post}', 'PostsController@show');

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
