<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Laravel App')</title>
</head>
<body>

    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/contact">Contact us</a></li>
        <li><a href="/about">About us</a></li>
        <li><a href="/projects">Projects</a></li>
    </ul>

    @yield('content')

</body>
</html>
