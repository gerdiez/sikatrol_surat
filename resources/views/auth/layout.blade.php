<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }} - SIKATROL</title>
    {{-- @vite('resources/css/app.css')
    @vite('resources/js/app.js') --}}
    <link rel="stylesheet" href="{{ asset('build/assets/app-dd2a727b.css') }}">
    <script src="{{ asset('build/assets/app-76774767.js') }}"></script>
</head>

<body>
    <main>
        @yield('content')
    </main>
</body>

</html>
