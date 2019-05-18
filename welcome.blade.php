<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel with Tailwind CSS</title>
<link rel="stylesheet" href="/css/app.css">
    </head>
    <body class="bg-gray-900 text-white">
        <div id="app" class="container mx-auto p-4">
            <custom-component></custom-component>
            <h1 class="text-6xl">Welcome to Laravel with Tailwind</h1>
            <p class="italic text-3xl">Tailwind CSS is preatty awesome!</p>
            <p class="text-base sm:text-lg md:text-xl lg:text-2xl xl:text-3xl">This text is responsvie. Check it out for various screens.</p>
            <example-component></example-component>
        </div>

        <script src="/js/app.js"></script>
    </body>
</html>