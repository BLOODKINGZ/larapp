@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>

    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
            <div class="form-group">
                {{ Form::label('title', 'Blog Title', ['class' => 'control-label']) }}
                {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Enter Blog Title']) }}
            </div>

            <div class="form-group">
                {{ Form::label('body', 'Blog Text', ['class' => 'control-label']) }}
                {{ Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Enter Blog Body']) }}
            </div>

            {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}
@stop