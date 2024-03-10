<!DOCTYPE html>
<html dir="rtl" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="antialiased max-w-md mx-auto">
        <x-header/>
        <div class="flex justify-between border-b border-slate-300">
            <div class="flex mt-2 pr-2">
                <div>
                    <x-pensel-svg/>
                </div>
                <div class="font-semibold pr-2">
                    فهرست مشاغل
                </div>
            </div>
            <div class="flex justify-items-start pl-2 mt-2 text-lg">
                <x-search-svg/>
            </div>
        </div>
    </body>
</html>