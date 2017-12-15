<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests\RichiestaCreazionePost;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    public function index()
    {
        $posts = Post::with('user')->latest()->get();

        if (request()->wantsJson()) {
            return $posts;
        }

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        auth()->user()->createPost($request->only('title', 'body'));

        return redirect('/');
    }

    public function edit(Post $post)
    {
        $this->authorize('update', $post);

        return view('posts.edit', compact('post'));
    }

    public function update(Post $post, RichiestaCreazionePost $request)
    {
        $this->authorize('update', $post);

        $post->update($request->only('title', 'body'));

        return redirect('/');
    }
}
