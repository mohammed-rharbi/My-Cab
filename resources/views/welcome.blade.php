<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
      @vite(['resources/css/app.css' , 'resources/js/app.js'])

    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
         
            <div class="bg-gray-900 text-white flex items-center justify-center h-screen">
            <div class="text-center">
                <h1 class="text-5xl font-bold mb-4">Welcome to Our Taxi Service</h1>
                <p class="text-xl mb-8">We'll get you there safely and on time!</p>
                <a href="/login" class="bg-yellow-400 hover:bg-yellow-500 text-black font-bold py-2 px-4 rounded-full inline-block">Login</a>
                <span class="mx-4 text-xl">or</span>
                <a href="/register" class="bg-yellow-400 hover:bg-yellow-500 text-black font-bold py-2 px-4 rounded-full inline-block">Register</a>
            </div>
        </div>
        </div>
    </body>
</html>
