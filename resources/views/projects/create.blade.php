<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create a project</title>
</head>
<body>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/projects">Projects</a></li>
    </ul>

    <form method="POST" action="/projects">
        {{ csrf_field() }}

        <div>
            <input type="text" name="title" placeholder="Project title">
        </div>

        <div>
            <textarea name="description" placeholder="Project description"></textarea>
        </div>

        <div>
            <button type="submit">Create a project</button>
        </div>
    </form>

</body>
</html>
