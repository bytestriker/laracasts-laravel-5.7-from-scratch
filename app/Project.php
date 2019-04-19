<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use App\Events\ProjectCreated;

class Project extends Model
{
    // protected $fillable = [
    //   'title', 'description'
    // ];
    // equivalent to this:

    protected $guarded = [];

    // Another option to trigger the ProjectCreated event:
    // ProjectCreated event triggered by the eloquent created event it self
    // Don't need the triggering event in the ProjectsController@store
    // (see comment there)
    // 
    // protected $dispatchesEvents = [
    //   'created' => ProjectCreated::class,
    // ];

    // but don't do this: Project::create(request()->all());

    public function owner()
    {
      return $this->belongsTo(User::class);
    }

    public function tasks()
    {
      return $this->hasMany(Task::class);
    }

    public function addTask($task)
    {
      $this->tasks()->create($task);
    }
}
