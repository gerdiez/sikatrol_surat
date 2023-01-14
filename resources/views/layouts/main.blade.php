<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }} - SIKATROL</title>
    @vite('resources/js/app.js')
</head>

<body>
    <div x-data="{ sidebarOpen: false }" class="flex overflow-x-hidden h-screen">
        <x-sidebar.index />
        <div class="flex-1">
            <x-navbar name="{{ $name }}"/>
            {{-- <x-header title="{{ $title }}" /> --}}
            <main class="p-4 bg-[#F4F7F9]">
                @yield('content')
            </main>
        </div>
    </div>
</body>

</html>
