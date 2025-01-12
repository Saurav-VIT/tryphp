@extends('layouts.app')

@section('title','The list of TASKS')


@section('content')

    <div>There are a lot of tasks present</div>
    @forelse ($tasks as $task)
       <a href="{{ route('tasks.show', ['task' => $task->id ])}}">{{$task -> title}}</a>
       <hr>
    @empty
       <div>There are not much tasks</div>
    @endforelse


    @if($tasks->count())
      <nav>{{ $tasks->links()}}</nav>
    @endif
@endsection
