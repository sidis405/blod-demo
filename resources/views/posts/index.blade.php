@extends('layouts.app')


@section('content')

<div class="col-md-8">
    @foreach($posts as $post)
  <div class="post-preview">
    <a href="/posts/{{ $post->id }}">
      <h2 class="post-title">
        {{ $post->title }}
      </h2>
      <p class="post-subtitle">
        {{ $post->body }}
      </p>
    </a>

    @if(@auth()->user()->can('update', $post))
      <a href="/posts/{{$post->id}}/edit"><span class="pull-right"><i class="fa fa-edit"></i> </span></a>
    @endif
    <p class="post-meta">Posted by
      <a href="#">{{ $post->user->name }}</a>
      on {{ $post->created_at->toFormattedDateString() }}</p>
  </div>
  @endforeach
  <hr>
  <!-- Pager -->
  <div class="clearfix">
    <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
  </div>
</div>

@stop
