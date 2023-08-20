<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Messages - @yield('title')</title>
        @vite('resources/css/app.css')
    </head>
    <body class="text-gray-300 bg-slate-950">
        <nav class="py-5 bg-slate-900 ">
            <div class="max-w-6xl mx-auto flex items-center justify-between px-4 md:px-0">
                <a href="{{ route('welcome') }}">
                    <h1 class="text-lg font-bold">Message<span class="font-light">Tweets</span></h1>
                </a>
                <div class="flex items-center gap-5 font-semibold">
                    <a href="{{ route('welcome') }}">Inicio</a>
                    <a href="{{ route('tweet.index') }}">Tweets</a>
                </div>
            </div>
        </nav>

        <main class="max-w-6xl mx-auto my-10 px-4 md:px-0">
            <h2 class="font-semibold text-xl">@yield('title')</h2>

            <section class="my-10">
                @yield('principal')
            </section>
        </main>
    </body>
</html>
