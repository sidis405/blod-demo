<?php

namespace Tests\Unit;

use App\Post;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function aUserCanCreatePost()
    {
        $user =  factory(User::class)->create();
        $data =  factory(Post::class)->make(['user_id' => $user->id])->toArray();

        $user->createPost($data);

        $this->assertDatabaseHas('posts', ['id' => 1, 'body' => $data['body']]);
    }
}
