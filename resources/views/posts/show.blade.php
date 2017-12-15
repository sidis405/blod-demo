@extends('layouts.app')

@section('content')

    <div class="col-sm-8 blog-main">
    <div class="blog-post">
        <h2 class="blog-post-title">{{ $post->title }}</h2>
        <p class="blog-post-meta">{{ $post->updated_at->toFormattedDateString() }}</p>
        <p>
            {{ $post->body }}
        </p>
    </div>

    <div>
        <ul class="list-group">
            @foreach($post->comments as $comment)
                <li class="list-group-item">
                    <strong> {{ $comment->created_at->diffForHumans() }} </strong> &nbsp; :
                    {{ $comment->body }}
                </li>
            @endforeach
        </ul>
    </div>
    <hr>
    <div>
        <form method="POST" action="/posts/{{$post->id}}/comments">
            {{ csrf_field() }}
            <div class="form-group">
                <textarea name="body" id="" cols="30" rows="10" class="form-control" placeholder="Aggiungi il tuo commento" ></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Commenta</button>
            </div>
        </form>
    </div>
    <hr>
    @include('layouts.errors')
</div>
@stop
