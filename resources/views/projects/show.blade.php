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
      <div class="">
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
@endsection
