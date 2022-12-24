<!doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? config('app.name') }}</title>
    @vite('resources/css/app.css')

</head>
<body>
    <x-logo />
    <x-nav />
    {{ $slot }}
    <x-footer />
</body>
</html>