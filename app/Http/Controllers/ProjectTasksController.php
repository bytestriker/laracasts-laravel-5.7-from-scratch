<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;
use App\Project;

class ProjectTasksController extends Controller
{
    public function store(Project $project)
    {
      $attributes = request()->validate(['description' => 'required']);
      $project->addTask($attributes);

      return back();
    }

    public function update(Task $task)
    {
      //three different approaches:

      // 1:
      // if (request()->has('completed')) {
      //   $task->complete();
      // } else {
      //   $task->incomplete();
      // }

      // 2:
      // request()->has('completed') ? $task-complete() : $task->incomplete();

      // 3:
      $method = request()->has('completed') ? 'complete' : 'incomplete';
      $task->$method();

      return back();
    }
}
