<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen bg-white font-[Montserrat]">
        @include('partials.nav')

        {{ $slot }}

        @fluxScripts
    </body>
</html>
