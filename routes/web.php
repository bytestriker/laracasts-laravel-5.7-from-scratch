<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  $tasks = [
    'Go to the store',
    'Go to the market',
    'Go to work',
    'Go to the concert'
  ];

    return view('welcome', [
      'tasks' => $tasks,
      'foo' => 'foobar',
      //'foo2' => request('title'), //use with url?title=laracasts
      //'foo3' => '<script>alert("foobar")</script>', //use {!! !!} to avoid scaping
    ]);

    //return view('welcome')->withTasks($tasks)->withFoo('foobar'); //this is equivalent to the previous return staetment

    /*
    this is also possible:
      return view('welcome')->with(
      'tasks' => $tasks,
      );
    */
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
