<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }}</title>

    @vite('resources/js/app.js')
</head>

<body>
    <div class="wrapper">
        {{-- <x-sidebar /> --}}
        <main id="app" class="w-100 vh-100" style="margin-left:4.5rem">
            @yield('container')
        </main>
    </div>
</body>

</html>
