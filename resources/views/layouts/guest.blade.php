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

<body class="flex max-w-[1920px] w-full justify-center font-sans antialiased text-gray-900">
    <div class="!w-full min-h-screen bg-gray-100">
        @isset($header)
            <header class="bg-white shadow">
                <div class="flex items-center gap-3 px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <a href="/">
                        <x-application-logo class="w-10 h-10 text-gray-500 fill-current" />
                    </a>
                    {{ $header }}
                </div>
            </header>
        @endisset
        <div class="!w-full px-6 py-4 mt-6 overflow-hidden bg-white shadow-md">
            {{ $slot }}
        </div>
    </div>
</body>

</html>
