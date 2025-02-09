<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ??= config('app.name') }}</title>

    <meta name="application-name" content="{{ config('app.name') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/ts/app.ts'])
    @filamentStyles

</head>
<body class="font-sans antialiased ">
<a class="sr-only focus:not-sr-only focus:fixed border-none bg-sky-500 shadow-lg shadow-black/50 outline-sky-600 text-white focus:top-5 focus:px-3 focus:py-2 focus:rounded focus:left-5 z-[1000]" href="#main">Skip to content</a>
<main id="main">
    {{ $slot }}
</main>

@filamentScripts
</body>
</html>
