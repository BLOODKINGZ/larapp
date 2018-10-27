@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>

    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}
    <div class="form-group">
        {{ Form::label('title', 'Blog Title', ['class' => 'control-label']) }}
        {{ Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Enter Blog Title']) }}
    </div>

    <div class="form-group">
        {{ Form::label('body', 'Blog Text', ['class' => 'control-label']) }}
        {{ Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' => 'Enter Blog Body']) }}
    </div>

    {{ Form::hidden('_method', 'PUT') }}

    {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}
@stop