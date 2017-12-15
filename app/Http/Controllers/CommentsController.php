<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests\RichiestaCreazioneCommento;

class CommentsController extends Controller
{
    public function store(RichiestaCreazioneCommento $request, Post $post)
    {
        // aggiungi commento a post
        $post->comments()->create(['body' => request('body'), 'user_id' => auth()->id()]);

        return back();
    }
}
