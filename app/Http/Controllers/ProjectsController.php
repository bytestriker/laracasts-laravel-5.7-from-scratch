<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
      // $this->middleware('auth')->only(['store', 'update']);
      // $this->middleware('auth')->escept(['show']);
    }
    public function index()
    {
      $projects = Project::where('owner_id', auth()->id())->get();
      
      return view('projects.index', ['projects' => $projects]);
    }

    public function create()
    {
      return view('projects.create');
    }

    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
      return view('projects.edit', compact('project'));
    }

    public function update(Project $project)
    {
      $project->update(request(['title', 'description']));

      return redirect('/projects');

    }

    public function destroy(Project $project)
    {
      $project->delete();
      return redirect('/projects');
    }

    public function store()
    {
      $attributes = request()->validate([
        'title' => ['required', 'min:3'], //validation rules can be members of an array
        'description' => 'required|min:3' //or simply separated by |
      ]);

      $attributes['owner_id'] = auth()->id();

      Project::create($attributes);

      return redirect('/projects');

    }
}
