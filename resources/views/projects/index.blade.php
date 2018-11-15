<!DOCTYPE html>
<html>
<head>
    <title>Projects</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
</head>
<body>
    <a href="/">Home</a>
    <h1 class="title">Projects</h1>

    <div class="content">
    <ul>
        @foreach ($projects as $project)
            <li><a href="/projects/{{ $project->id }}">{{ $project->title }}</a></li>
        @endforeach
    </ul>
    </div>

    <a href="/projects/create">Create a project</a>
</body>
</html>
