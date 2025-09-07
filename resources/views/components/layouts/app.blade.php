<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wdth,wght@0,75..100,300..800;1,75..100,300..800&display=swap"
        rel="stylesheet">

    <title>{{ $title ?? 'Page Title' }}</title>

    @livewireStyles()
    @vite(['resources/css/app.css'])
</head>

<body class="bg-[#16151d] text-white">
    <div>
        {{ $slot }}
    </div>

    @livewireScripts()
</body>

</html>
