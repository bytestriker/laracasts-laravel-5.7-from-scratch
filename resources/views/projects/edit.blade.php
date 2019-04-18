@extends('layout')

@section('content')
  <h1 class="title">Edit project</h1>

  <form class="" action="/projects/{{ $project->id }}" method="post" style="margin-bottom: 1em;">
    {{ method_field('PATCH') }}
    {{ csrf_field() }}
    <div class="field">
      <label class="label" for="title">Title</label>
      <div class="control">
        <input class="input" type="text" placeholder="Title" name="title" value="{{ $project->title }}">
      </div>
    </div>

    <div class="field">
      <label class="label" for="description">Description</label>
      <div class="control">
        <textarea class="input" name="description">{{ $project->description }}</textarea>
      </div>
    </div>

    <div class="field">
      <div class="control">
        <button type="submit" class="button is-link">Update project</button>
      </div>
    </div>
  </form>

  @include('errors')

  <form action="/projects/{{ $project->id }}" method="post">
    @method('DELETE')
    @csrf
    {{-- which is equivalent to this: --}}
    {{-- {{ method_field('DELETE') }}
    {{ csrf_field() }} --}}
    <div class="field">
      <div class="control">
        <button type="submit" class="button">Delete project</button>
      </div>
    </div>
  </form>

@endsection
