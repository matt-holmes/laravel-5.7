@extends('layouts.base_layout')

@section('content')
    <h2>{{ $project->title }}</h2>
    <h4>{{ $project->description }}</h4>
    <h4><a href="/projects/{{ $project->id }}/edit">Edit</a></h4>
    @if($project->tasks->count())
        <h2>Tasks:</h2>
        <div>
            <div class="w3-border tasks-list w3-padding">
            @foreach($project->tasks as $task)
                <div class="w3-row-padding">
                    <form method="POST" action="/tasks/{{ $task->id }}" class="task-item">
                        @method('PATCH')
                        @csrf
                        <input type="checkbox" name="completed" class="w3-check" onChange="this.form.submit()" {{ $task->completed ? 'checked' : ''}}>
                        <label class="{{ $task->completed ? 'is-complete' : ''}}">{{ $task->description }}</label>
                    </form>
                </div>
            @endforeach
            </div>
        </div>
    @endif
    <div class="w3-border create-task w3-section">
        @include('errors')
        <div class="w3-container">
          <h2>New Task</h2>
        </div>
        <form method="POST" action="/projects/{{ $project->id }}/tasks" class="w3-container">
            {{ csrf_field() }}
            <div class="w3-row-padding">
                <label>Description</label>
                <input class="w3-input {{ $errors->has('description') ? 'w3-border w3-border-red' : ''}}" type="text" name="description" placeholder="Project Task" value="{{ old('descriptions') }}">
            </div>
            <div class="w3-row-padding">
                <p>
                <button class="w3-btn w3-padding w3-teal" type="submit">Create Task</button>
                </p>
            </div>
        </form>
    </div>
@endsection
@section('title', 'Projects')
