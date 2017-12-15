@extends('layouts.app')

@section('content')

    <div class="col-sm-8 blog-main">

        <h3>Modifica Post</h3>
        <form method="POST" action="/posts/{{ $post->id }}">

            {{ method_field('PATCH') }}
            {{ csrf_field() }}

            <div class="form-group">
                <label>Titolo</label>
                <input class="form-control" name="title" required="" value="{{ $post->title }}"></input>
            </div>
            <div class="form-group">
                <label>Post</label>
                <textarea class="form-control" name="body" rows="10" required="">{{ $post->body }}</textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success pull-right">Invia</button>
            </div>
        </form>

        <div class="clearfix"></div>

        @include('layouts.errors')
    </div>
@stop
