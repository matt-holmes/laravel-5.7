<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Project;

class TasksController extends Controller
{
    public function update(Task $task)
    {
        request()->has('completed') ? $task->complete() : $task->incomplete();
        return back();
    }

    public function store(Project $project)
    {
        $project->addTask(request()->validate(['description' => 'required']));
        return back();
    }
}
