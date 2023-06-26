<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')

        <!-- Styles -->
        
    </head>
    <body class="antialiased ">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-blue-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white bg-blue-100">
       
        <!-- component -->
        <div class="font-sans">
            <div>
                <div class="relative min-h-screen flex flex-col sm:justify-center items-center bg-blue-100 ">
                    <div class="relative sm:max-w-sm w-full">
                        <div class="card bg-blue-700 shadow-lg  w-full h-full rounded-3xl absolute  transform -rotate-6"></div>
                        <div class="card bg-blue-300 shadow-lg  w-full h-full rounded-3xl absolute  transform rotate-6"></div>
                        <div class="relative w-full rounded-3xl  px-6 py-4 bg-gray-100 shadow-md">
                            @if (Route::has('login'))
                            @auth
                                <div class="mt-7">
                                    <a href="{{ url('/dashboard') }}">
                                        <button class="bg-blue-500 w-full py-3 rounded-xl text-white shadow-xl hover:shadow-inner focus:outline-none transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                                            Dashboard
                                        </button>
                                    </a>
                                </div>
                            @else
                                @if (Route::has('register'))
                                    <label for="" class="block mt-3 text-sm text-gray-700 text-center font-semibold">
                                        Register Yourself
                                    </label>
                                    <div class="mt-7">
                                        <a href="{{ route('register') }}">
                                            <button  class="bg-blue-500 w-full py-3 rounded-xl text-white shadow-xl hover:shadow-inner focus:outline-none transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                                                Sign Up
                                            </button>
                                        </a>
                                    </div>
                                @endif
                                <div class="mt-7">
                                    <div class="flex justify-center items-center">
                                        <label class="mr-2" >¿Do you already have an account?</label>
                                        <a href="{{ route('login') }}" class=" text-blue-500 transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                                            Log in
                                        </a>
                                    </div>
                                </div>
                            @endauth
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </body>
</html>
