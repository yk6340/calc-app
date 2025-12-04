<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Laravel Volt App' }}</title>

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    @livewireStyles
</head>
<body class="antialiased">
    {{ $slot }}

    @livewireScripts
</body>
</html>

