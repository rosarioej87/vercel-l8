@extends('post.layout')
@section('content')
    <h1>Show Post</h1>
    <a href="{{route('posts.index')}}" class="btn btn-primary">back</a>
    <h3>{{$post->title}}</h3>
    <p>{{$post->description}}</p>
@endsection
