<h1>
    The list of tasks
</h1>

<div>
    {{-- @if(count($tasks) > 2) --}}
      <div>There are a lot of tasks present</div>
      @forelse ($tasks as $task)
      <div> {{$task -> title}}</div>
      @empty
      <div>There are not much tasks</div>
      @endforelse

    {{-- @else
      <div>There are not much tasks</div>
    @endif --}}
</div>

