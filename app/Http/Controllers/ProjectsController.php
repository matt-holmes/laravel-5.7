<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
class ProjectsController extends Controller
{
    public function index()
    {
        $projects = \App\Project::where('owner_id', auth()->id())->get();
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Project $project)
    {
        $attributes = request()->validate([
            'title' => ['required', 'min:3'],
            'description' => 'required',

        ]);
        $attributes['owner_id'] = auth()->id();
        $project::create($attributes);
        return redirect('/projects');
    }

    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    public function show(Project $project)
    {
        $this->authorize('view', $project);
        return view('projects.show', compact('project'));
    }

    public function update(Project $project)
    {
        $project->update(request(['title', 'description']));
        return redirect("/projects/".$project->id."/edit");
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect('/projects');
    }
}
