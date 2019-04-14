@extends('layout')

@section('content')
    <h1 class="title">Create a New Project</h1>

    <form action="/projects" method="post">
      {{ csrf_field() }}
      <div>
        <input type="text" name="title" placeholder="Project title">
      </div>
      <div>
        <textarea name="description" placeholder="Project description" ></textarea>
      </div>
      <div>
        <button type="submit">Create project</button>
      </div>
    </form>

@endsection
