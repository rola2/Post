@extends("layouts.app")

@section("title","index")

@section("content")
<a href="{{route("posts.create")}}">
    <button> add new post</button>
</a>
@forelse ($posts as $post)
<div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="/images/posts/{{$post->image}}" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{$post->title}}</h5>
          <p class="card-text">{{$post->description}}</p>
        </div>
      </div>
    </div>
    <a href="{{route("posts.show",$post->id)}}">more about this post</a>
    <a href="{{route("posts.edit",$post->id)}}">edit</a>
    <form action="{{route("posts.destroy",$post->id)}}" method="POST">
    @csrf
    @method("DELETE")
    <button type="submit">Delete</button>
    </form>

  </div>
@empty
    <h1>there is any post</h1>
@endforelse



@endsection
