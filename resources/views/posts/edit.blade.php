@extends("layouts.app")
@section("title","create")

@section("content")
<form action="{{route("posts.update",$post->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method("PUT")
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label" >Title</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name = "title" value="{{$post->title}}">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label" >Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name = "description" rows="3">{{$post->description}}</textarea>
  </div>
  <div class="mb-3">
    <label for="formFile" class="form-label">Choose Image</label>
    <input class="form-control" type="file" id="formFile" name = "image">
  </div>
  <img src="/images/posts/{{$post->image}}" alt="">

    <input type="submit"   value="send">

</form>

