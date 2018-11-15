@extends('taskLayout')

@section('content')

    <h1 class="title">{{ $project->title }}</h1>

    <div class="content">
        <p>{{ $project->description }}</p>
    </div>

    <p><a href="/projects/{{ $project->id }}/edit">Edit</a></p>

@endsection
