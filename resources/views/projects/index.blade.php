@extends('layout')

@section('content')
    <h1 class="title">Projects</h1>

    <ul>
      @if (session('message'))
        <div class="alert">{{ session('message') }}</div>
      @endif

      @foreach ($projects as $project)
        <li>
          <a href="/projects/{{ $project->id }}">
            {{ $project->title }}
          </a>
        </li>
      @endforeach
    </ul>

@endsection
