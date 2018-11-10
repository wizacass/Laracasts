<!DOCTYPE html>
<html>
<head>
    <title>Projects</title>
</head>
<body>
    <a href="/">Home</a>
    <h1>Projects</h1>

    <ul>
        @foreach ($projects as $project)
            <li>{{ $project->title }}</li>
        @endforeach
    </ul>
    <a href="/projects/create">Create a project</a>

</body>
</html>
