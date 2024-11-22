@extends('layouts.app')

@section('title','create')

@section('content')
<h1>Add New Post </h1>

<form action="{{route("posts.store")}}" method="POST" enctype="multipart/form-data">
    @csrf
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">title</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="title" >
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
  </div>

    <input type="file" name="image" id="">  <br> <br>
    <input type="submit" value="send">
</form>

@endsection
