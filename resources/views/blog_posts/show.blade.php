@extends('layouts.app')

@section('content')
    <a class="btn-outline-dark" href="/posts">Go back</a>
    <div class="well">
        <h1>{{$post->title}}</h1>
        <small>Created at {{$post->created_at}}</small>
        <div class="well">
            {{$post->body}};
        </div>
    </div>
@stop