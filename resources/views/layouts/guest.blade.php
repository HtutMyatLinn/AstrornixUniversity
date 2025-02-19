<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="relative font-sans text-gray-900 antialiased" style="height: 100vh; width: 100%;">
    <!-- Background Image -->
    <div class="fixed inset-0 -z-10"
        style="background-image: url('{{ asset('images/zhanhui-li-1iuxWsIZ6ko-unsplash.jpg') }}');
               background-size: cover; background-position: center; height: 100vh; width: 100%;">
    </div>

    <!-- Dark Overlay -->
    <div class="fixed inset-0 bg-black opacity-40 -z-10"></div>

    <div class="w-full max-w-4xl mx-auto h-screen flex justify-center items-start sm:items-center">
        <div>
            {{ $slot }}
        </div>
    </div>
</body>

</html>
