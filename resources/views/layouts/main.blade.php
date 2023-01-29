<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }} - SIKATROL</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body>
    <div x-data="{ sidebarOpen: true }" class="flex overflow-x-hidden h-screen">
        <x-sidebar.index />
        <div class="flex-1">
            <x-navbar />
            <main class="p-4 bg-[#F4F7F9]">
                @yield('content')
            </main>
        </div>
    </div>
    @stack('script')
</body>

</html>
