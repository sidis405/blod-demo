<?php

namespace Tests\Feature;

use App\Post;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostCreationTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function postCanBeCreated()
    {
        // setup
        $user =  factory(User::class)->create();
        \Auth::loginUsingId($user->id);
        $post =  factory(Post::class)->make(['user_id' => $user->id])->toArray();


        // action
        $response = $this->post('/posts', $post);

        // assection
        $response->assertStatus(302);
        $this->assertDatabaseHas('posts', ['id' => 1, 'body' => $post['body']]);

        $response = $this->get('/');

        $response->assertSee($post['title']);
        $response->assertSee($user->name);


        $response = $this->json('get', '/');

        $response->assertJsonFragment(['title' => $post['title']]);
        $response->assertJsonFragment(['name' => $user->name]);
    }
}
