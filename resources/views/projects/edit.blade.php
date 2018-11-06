@extends('layouts.base_layout')

@section('content')
    <h1>Edit</h1>
    @include('errors')
    <form method="POST" action="/projects/{{ $project->id }}" class="w3-container">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <div class="w3-row-padding">
            <input required class="w3-input" type="text" name="title" placeholder="Project Title" value="{{ $project->title }}">
        </div>
        <div class="w3-row-padding">
            <textarea required class="w3-input" name="description" placeholder="Project Description">{{ $project->description }}</textarea>
        </div>
        <div class="w3-row-padding">
            <p>
            <button class="w3-btn w3-padding w3-teal" type="submit">Update Project</button>
            </p>
        </div>
    </form>

    <form method="POST" action="/projects/{{ $project->id }}" class="w3-container">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <div class="w3-row-padding">
            <p>
            <button class="w3-btn w3-padding w3-teal" type="submit">Delete Project</button>
            </p>
        </div>
    </form>
@endsection

@section('title', 'Projects')
