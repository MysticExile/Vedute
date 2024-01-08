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
    <body class="font-sans text-gray-900 antialiased bg-[url('../../../public/background.png')]">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-100 text-center bg-[url('../../../public/background.png')]">
            <div>
                <a href="/">
                    <x-application-logo class="w-full h-full fill-current text-black-100 ml-10 pl-10" />
                </a>
            </div>

            <div class="w-auto h-auto mt-6 px-6 py-4 bg-white dark:bg-gray-100 overflow-auto outline outline-1 text-center">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
