<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <nav>
            <a href="/">Home</a>
            <a href="/dashboard">Blog Dashboard</a>
        </nav>
    </header>

    @yield('content')
    
    <footer><br>
        &copy; Laravel 7 | 2020 Sekolah Koding
    </footer>
</body>
</html>