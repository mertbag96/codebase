<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ env('APP_NAME', 'CodeBase') }}</title>

        @if (file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body class="mx-auto max-w-[75%] min-h-dvh flex flex-col justify-center bg-gray-950">
        {{ $slot }}
    </body>
</html>
