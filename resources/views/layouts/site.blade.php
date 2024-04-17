<!DOCTYPE html>
<html dir="rtl" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resource/js/app.js'])

</head>
<body class="pr-2 font-sans w-fit h-fit rounded-2xl shadow bg-slate-50 text-gray-900 antialiased max-w-md mx-auto">

    <x-header/>

    {{ $slot }}

</body>
</html>