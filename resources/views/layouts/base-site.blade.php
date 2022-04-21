<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ $title ?? config('app.name', 'Laravel') }} | agclass.com</title>

    <link rel="shortcut icon" href="/assets/faviconit/favicon.ico">
    <link rel="icon" sizes="16x16 32x32 64x64" href="/assets/faviconit/favicon.ico">
    <link rel="icon" type="image/png" sizes="196x196" href="/assets/faviconit/favicon-192.png">
    <link rel="icon" type="image/png" sizes="160x160" href="/assets/faviconit/favicon-160.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/assets/faviconit/favicon-96.png">
    <link rel="icon" type="image/png" sizes="64x64" href="/assets/faviconit/favicon-64.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/faviconit/favicon-32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/faviconit/favicon-16.png">
    <link rel="apple-touch-icon" href="/assets/faviconit/favicon-57.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/faviconit/favicon-114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/faviconit/favicon-72.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/assets/faviconit/favicon-144.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/assets/faviconit/favicon-60.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/assets/faviconit/favicon-120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/faviconit/favicon-76.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/assets/faviconit/favicon-152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/faviconit/favicon-180.png">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="/assets/faviconit/favicon-144.png">
    <meta name="msapplication-config" content="/assets/faviconit/browserconfig.xml">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body class="font-sans antialiased min-h-screen flex flex-col">
    <div class="flex-1 bg-gray-100">
        <x-navigation />
        <main class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            {{ $slot }}
        </main>
    </div>
    <x-footer />
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    {{ $script ?? '' }}
</body>
</html>
