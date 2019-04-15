<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // protected $fillable = [
    //   'title', 'description'
    // ];
    // equivalent to this:

    protected $guarded = [];

    // but dont do this: Project::create(request()->all());

    public function tasks()
    {
      return $this->hasMany(Task::class);
    }

    public function addTask($task)
    {
      $this->tasks()->create($task);
    }
}
