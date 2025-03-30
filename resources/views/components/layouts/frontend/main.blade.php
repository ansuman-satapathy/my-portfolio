<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title ?? 'Ansuman Satapathy' }}</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Load Custom Fonts -->
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="bg-[var(--color-bg)] text-[var(--color-text)]">
    <x-layouts.frontend.header />

    <main class="relative min-h-screen">
        {{ $slot }}
    </main>

    <x-layouts.frontend.footer />

    @livewireScripts
</body>

</html>
