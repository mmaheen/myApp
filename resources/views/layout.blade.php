<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My App - @yield('title')</title>
    <link href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" media="all" rel="stylesheet">
</head>
<body>
    <header>
        this is header
    </header>
    <nav>
        <ul>
            <li><a class="{{Request()->is('/') ? 'primary':''}}" href="{{route('index')}}">Index</a></li>
            <li><a class="{{Request()->is('/home') ? 'danger':''}}" href="{{route('home')}}">Home</a></li>
            <li><a class="{{Request()->is('/') ? 'secondary':''}}" href="{{route('about')}}">About</a></li>
        </ul>
    </nav>
    <section>
        @yield('content')
    </section>
    <footer>
        <h1>
            Footer
        </h1>
    </footer>

</body>
</html>