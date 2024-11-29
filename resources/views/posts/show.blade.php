@extends("layouts.app")
@section("title","show")

@section("content")
<h1>Title: {{$post->title}}</h1>

<p>Description: {{$post->description}}</p>

<img src="/images/posts/{{$post->image}}" alt="">

<p>added at: {{$post->created_at}}</p>

<a href="{{route("posts.index")}}">back</a>
@endsection
