@extends('template')

@section('content')
    <h1>Blog</h1>

    @foreach($posts as $post)
        <h2>{{ $post->title }} <i>({{ $post->created_at}})</i></h2>
        <p> {{ $post->content}} </p>

        <h3>Comments</h3>
        @foreach($post->comments as $comment)
            <b>Name : </b> {{ $comment->name}} <br/>
            <b>Comment : </b> {{ $comment->comment}}
        @endforeach
        <hr>
    @endforeach

@endsection