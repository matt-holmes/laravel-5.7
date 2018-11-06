@extends('layouts.base_layout')

@section('content')
    <h2>Projects:</h2>
    <div>
        <ul class="w3-ul w3-hoverable">
        @foreach($projects as $project)
            <li>
                <a href="/projects/{{ $project->id }}">{{$project->title}}</a>
            </li>
        @endforeach
        </ul>
    </div>
    <h5><a href="projects/create">Create New Project</a></h5>
@endsection
@section('title', 'Projects')
