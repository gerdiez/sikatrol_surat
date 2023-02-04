@php
    $cwd = getcwd();
    $cssName = basename(glob($cwd . '/build/assets/*.css')[0], '.css');
    $jsName = basename(glob($cwd . '/build/assets/*.js')[0], '.js');
    $css = asset('build/assets/' . $cssName . '.css');
    $js = asset('build/assets/' . $jsName . '.js');
@endphp

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }} - SIKATROL</title>
    {{-- @vite('resources/css/app.css')
    @vite('resources/js/app.js') --}}
    <link rel="stylesheet" href="{{ $css }}" id="css">
    <script src="{{ $js }}" id="js"></script>
    @livewireStyles
</head>

<body>
    <div x-data="{ sidebarOpen: true }" class="flex overflow-x-hidden h-screen">
        <x-sidebar.index notif="" />
        <div class="flex-1">
            <x-navbar />
            <main class="p-4 bg-[#F4F7F9]">
                @yield('content')
            </main>
        </div>
    </div>
    @livewireScripts
    @stack('script')
    <script>
        let notif = {!! json_encode($notif) !!}
        let key = Object.keys(notif)
        for (let index = 0; index < key.length; index++) {
            if (document.getElementById(key[index]) != null) {
                document.getElementById(key[index]).textContent = notif[key[index]]
            }
        }
    </script>
</body>

</html>
