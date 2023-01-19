<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }} - SIKATROL</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body>
    <main>
        @yield('content')
    </main>
</body>

</html>
