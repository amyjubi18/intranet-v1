<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Intranet - {{ config('app.name') }}</title>

        <!-- Fonts -->

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased text-gray-900 ">
        <section class="flex flex-col md:flex-row h-screen items-center border-4 border-blue-900 rounded ">
            <div class="bg-blue-600 hidden lg:block h-screen hidden bg-blue-600 lg:block md:w-1/2 xl:w-2/3 h-screen">
                <img src="../img/fondo-intranet.jpg" class="w-full h-full object-cover" alt="">
            </div>
            <div class="w-full px-6 py-4 mt-6 overflow-hidden bg-white  sm:max-w-md  sm:rounded-lg">
                <h1 class="text-5xl font-bold text-center my-1 text-blue-900" style="padding-top: -10px">Intranet</h1>
                <h1 class="text-2xl font-bold text-center leading-tight mt-5 ">Inicia Sesión</h1>
                {{ $slot }}
            </div>





        </section>
    </body>
</html>
