@extends('layout')

@section('content')
    <h1 class="title">Create a New Project</h1>

    <form action="/projects" method="post">
      {{ csrf_field() }}
      <div class="field">
        <label class="label" for="title">Project title</label>
        <div class="control">
          <input type="text" name="title" placeholder="Project title" class="input {{ $errors->has('title') ? 'is-danger' : '' }}" required value="{{ old('title') }}">
        </div>
      </div>

      <div class="field">
        <label class="label" for="description">Project description</label>
        <div class="control">
          <textarea name="description" placeholder="Project description" class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}" required>{{ old('description') }}</textarea>
        </div>
      </div>
      <div class="field">
        <div class="control">
          <button type="submit" class="button is-link">Create project</button>
        </div>
      </div>

    </form>

    @if ($errors->any())
      <div class="notification is-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif


@endsection
