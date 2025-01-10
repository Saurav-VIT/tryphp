@extends('layouts.app')

@section('title','The list of TASKS')


@section('content')

    <div>There are a lot of tasks present</div>
    @forelse ($tasks as $task)
       <a href="{{ route('tasks.show', ['id' => $task->id ])}}">{{$task -> title}}</a>
       <hr>
    @empty
       <div>There are not much tasks</div>
    @endforelse

@endsection
