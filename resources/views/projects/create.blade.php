@extends('layouts.base_layout')

@section('content')
    <h2>Create a New Project</h2>
    @include('errors')
    <form method="POST" action="/projects" class="w3-container">
        {{ csrf_field() }}
        <div class="w3-row-padding">
            <input class="w3-input {{ $errors->has('title') ? 'w3-border w3-border-red' : ''}}" type="text" name="title" placeholder="Project Title" value="{{ old('title') }}">
        </div>
        <div class="w3-row-padding">
            <textarea class="w3-input" name="description" placeholder="Project Description" required></textarea>
        </div>
        <div class="w3-row-padding">
            <p>
            <button class="w3-btn w3-padding w3-teal" type="submit">Create Project</button>
            </p>
        </div>
    </form>
@endsection

@section('title', 'Projects')
