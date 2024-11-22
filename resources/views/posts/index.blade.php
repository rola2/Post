@extends('layouts.app')

@section('title' , 'index')

@section('content')

<a href="/create">
    <button type="button" class="btn btn-info">add new post</button>
</a>

@forelse ($posts as $post)
<div class="card" style="width: 18rem;">
    <img src="/images/posts/{{ $post->image }}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$post->title}}</h5>
      <p class="card-text">{{$post->description}}</p>
      <a href="#" class="btn btn-primary">update</a>
      {{-- <a href="{{route('delete')}}" class="btn btn-primary">delete</a> --}}
      <form action="{{ url('/'.$post->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <a href="/" class="btn btn-primary">delete</a>
    </form>
    </div>
  </div>
@empty
    <h1>There is any posts</h1>
@endforelse

@endsection
