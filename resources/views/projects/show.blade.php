@extends('layout')

@section('content')
  <h1 class="title">{{ $project->title }}</h1>

    <div class="content">
     {{ $project->description }}
     <p>
       <a href="/projects/{{ $project->id }}/edit">Edit</a>
     </p>
    </div>

    @if ($project->tasks->count())
      <div class="box">
        @foreach ($project->tasks as $task)
          <div>
            <form class="" action="/tasks/{{ $task->id }}" method="post">
              @method('PATCH')
              @csrf
              <label class="checkbox {{ $task->completed ? 'is-complete' : '' }}" for="completed">
                <input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                {{ $task->description }}
              </label>
            </form>
          </DIV>
        @endforeach
      </div>
    @endif

    {{--  add a new task form --}}
    <form class="box" action="/projects/{{ $project->id }}/tasks" method="post">
      @csrf
        <div class="field">
          <label class="label" for="description">New Task</label>
          <div class="control">
            <input class="input" type="text" placeholder="New task" name="description" required>
          </div>
        </div>
        <div class="field">
          <div class="control">
            <button type="submit" class="button is-link">Add task</button>
          </div>
        </div>
        @include('errors')
    </form>
@endsection
