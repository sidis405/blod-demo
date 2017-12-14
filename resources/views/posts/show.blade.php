@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-8 blog-main">
    <div class="blog-post">
        <h2 class="blog-post-title">{{ $post->title }}</h2>
        <p class="blog-post-meta">{{ $post->updated_at->diffForHumans() }}</p>
        <p>
            {{ $post->body }}
        </p>
    </div>
</div>
@stop
