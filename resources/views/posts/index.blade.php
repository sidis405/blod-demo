@extends('layouts.app')


@section('content')

<div class="row">
    <div class="col-sm-8 blog-main">

    @foreach($posts as $post)

    <div class="blog-post">
        <h2 class="blog-post-title">
            <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
        </h2>
        <p class="blog-post-meta">{{ $post->updated_at->diffForHumans() }}</p>
        <p>
            {{ $post->body }}
        </p>
    </div>

    @endforeach
    <nav>
        <ul class="pager">
            <li><a href="#">Previous</a></li>
            <li><a href="#">Next</a></li>
        </ul>
    </nav>
</div>

@stop
