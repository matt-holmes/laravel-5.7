@extends('layouts.base_layout')

@section('content')
    <div class="title m-b-md">
        Matts Stuffs
    </div>

    <div class="title m-b-md">
        Tasks:
    </div>
    <ul>
    @foreach($tasks as $task)
        <li>{{{$task}}}</li>
    @endforeach
    </ul>
@endsection

@section('title')
    Home Page
@endsection
