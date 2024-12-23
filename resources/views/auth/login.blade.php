@extends('layouts.app')
@section("title","login")

@section("content")
    <form action="{{route("login")}}" method="POST">
        @csrf
        <input type="email" placeholder="enter your email" name= "email">
        <input type="password" placeholder="enter your password" name="password">
        <input type="submit" value="login">
        
    
    </form>    
@endsection