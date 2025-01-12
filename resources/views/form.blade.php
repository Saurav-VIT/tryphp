@extends('layouts.app')

@section("title", isset($task) ? "Edit task" : "Add task")

@section('styles')
<style>
    .error-message{
        color: red;
        font-size: 0.8rem;

    }
</style>
@endsection
@section("content")
   <form method="POST" action="{{isset($task) ? route('tasks.update', ['task' => $task->id ]) : route('tasks.store')}}">
    @csrf
    @isset($task)
     @method('PUT')
    @endisset
    <div>
        <label for="title">
            Title
        </label>
        <input type="text" name="title" id="title" value="{{ $task->title ?? old('title')}}">
        @error('title')
          <p class="error-message">{{$message}}</p>
        @enderror
    </div>
    <div>
        <label for="description">
            Description
        </label>
        <textarea name="description" id="description" cols="30" rows="5">{{ $task->description ?? old('description')}}</textarea>
        @error('description')
          <p class="error-message">{{$message}}</p>
        @enderror
    </div>
    <div>
        <label for="long_description">
            Long Description
        </label>
        <textarea name="long description" id="long_description" cols="30" rows="10">{{ $task->long_description ?? old('long_description')}}</textarea>
        @error('long_description')
            <p class="error-message">{{$message}}</p>
        @enderror
    </div>
    <div>
        <button type="submit">
             @isset($task)
                Update task
             @else
                Add task
             @endisset
        </button>
    </div>
   </form>
@endsection

<p>I am working on creating view.</p>