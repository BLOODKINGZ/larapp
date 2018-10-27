@extends('layouts.app')

@section('content')
    <a class="btn-outline-dark" href="/posts">Go back</a>
    <div class="well">
        <h1>{{ $post->title }}</h1>
        <small>Created at {{ $post->created_at }}</small>
        <div class="well">
            {{ $post->body }}
        </div>
    </div>
    <a class="btn btn-outline-dark" href="/posts/{{ $post->id }}/edit">Edit Post</a>

    {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right']) !!}
        {!! Form::hidden('_method', 'DELETE') !!}
        {!! Form::submit('Delete Post', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop