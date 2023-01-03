<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }}</title>

    @vite('resources/js/app.js')
</head>

<body>
    <div x-data="{ sidebarOpen: true }" class="flex overflow-x-hidden h-screen">
        <x-sidebar />
        <div class="flex-1">
            <x-header />
            <main class="p-4">
                @yield('content')
            </main>
        </div>
    </div>
</body>

</html>
