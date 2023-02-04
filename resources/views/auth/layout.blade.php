@php
    $cwd = getcwd();
    $css = basename(glob('/Users/abuabdirohman/Documents/Project/prj-sikatrol-surat/sikatrol_surat/public/build/assets/*.css')[0], '.css');
    $js = basename(glob('/Users/abuabdirohman/Documents/Project/prj-sikatrol-surat/sikatrol_surat/public/build/assets/*.js')[0], '.js');
@endphp

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }} - SIKATROL</title>
    {{-- @vite('resources/css/app.css')
    @vite('resources/js/app.js') --}}
    <link rel="stylesheet" href="" id="css">
    <script src="" id="js"></script>
    <script>
        const css = "{{ $css }}"
        const js = "{{ $js }}"
        document.getElementById('css').href = `{{ asset('build/assets/${css}.css') }}`
        document.getElementById('js').src = `{{ asset('build/assets/${js}.js') }}`
    </script>
</head>

<body>
    <main>
        @yield('content')
    </main>
</body>

</html>
