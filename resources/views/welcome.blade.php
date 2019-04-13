@extends('layout')

@section('content')
  <h1>My {{ $foo }} Website</h1>
  {{-- <h1>My {{ $foo2 }} Website</h1>  <!-- use with url?title=Laracasts --> --}}
  {{-- <h1>My {!! $foo3 !!} Website</h1>  <!-- use {!! !!} to avoid scaping --> --}}

  <ul>
    @foreach ($tasks as $task)
      <li>{{ $task }}</li>
    @endforeach
  </ul>
@endsection
