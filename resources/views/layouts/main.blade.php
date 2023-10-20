<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- CSS da aplicação -->
    <link rel="stylesheet" href="/css/styles.css">
    <script src="/js/scripts.js"></script>
</head>
<body>
<header>
    <div>
        <ul>
            <li><a href="/clientes">Clientes</a></li>
            <li><a href="/">Dashboards</a></li>
        </ul>
    </div>
</header>
<main>
    <div>
        <div>
            @if(session('msg'))
                <p class="msg">{{ session('msg') }}</p>
            @endif
        @yield('content')
    </div>
</main>
<footer>
    <p>PHP Laravel 2023</p>
</footer>
</body>
</html>
