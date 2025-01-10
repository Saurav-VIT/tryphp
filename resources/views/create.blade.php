@extends('layouts.app')

@section("title","Add task")
@section("content")
   <form method="POST" action="{{route('tasks.store')}}">
    @csrf
   </form>
@endsection

<p>I am working on creating view.</p>
