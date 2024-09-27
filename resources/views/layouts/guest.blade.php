<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title') - Balai Bahasa UNAI</title>

        <!-- Favicon -->
        <link rel="icon" href="Logo-Unai.png">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col justify-center items-center bg-gray-200 p-5 xl:p-20">
{{--            <div>--}}
{{--                <a href="/" wire:navigate>--}}
{{--                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />--}}
{{--                </a>--}}
{{--            </div>--}}

            <div class="mt-6 p-5 bg-white shadow-md rounded-xl md:w-2/3 lg:w-1/4 {{ Route::is('register') ? 'lg:w-1/2' : '' }}">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
