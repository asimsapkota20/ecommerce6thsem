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
    <body class="font-sans antialiased">
        @include('layouts.alert')
        <div class="flex">
            <div class="w-56 h-screen bg-gray-800 shadow-lg border border-gray-200">
            <img src="\images\laravel.jpg" alt="" class="mx-auto mt-5">
            <div class="text-center mt-5 border-2">
                <a href="{{route('dashboard')}}" class="font-bold text-white block p-3 hover:bg-gray-300">DashBoard</a>
            </div>
            <div class="text-center border-2">
                <a href="{{route('category.index')}}" class="font-bold items-center  block  hover:bg-gray-300 text-white p-3">category</a>
            </div>
            <div class="text-center border-2">
                <a href="{{route('brand.index')}}" class="font-bold items-center  block  hover:bg-gray-300 text-white p-3">brands</a>
            </div>
            <div class="text-center border-2">
                <a href="{{route('product.index')}}" class="font-bold items-center  block  hover:bg-gray-300 text-white p-3">products</a>
            </div>
            <div class="text-center border-2">
                <form action="{{route('logout')}}" method="post" class="flex">
                    @csrf
                    <button type="submit" class=" text-center text-l block font-bold p-4 border-b text-white flex-1 text-left hover:bg-gray-300">logout</button>
                </form>
            </div>
            

            </div>
            <div class="p-4 flex-1">
                <h2 class="text-3xl font-bold">@yield('title')

                </h2>
                <hr class="h-1 bg-red-600">
                <div class="mt-4">@yield('content')</div>

        </div>
        </div>
        
    </body>
</html>
