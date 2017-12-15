<?php

use App\Post;
use App\User;
use App\Comment;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(User::class, 10)->create();

        foreach ($users as $user) {
            $posts = factory(Post::class, 10)->create(['user_id' => $user->id]);

            foreach ($posts as $post) {
                factory(Comment::class, 10)->create(['post_id' => $post->id]);
            }
        }
    }
}
