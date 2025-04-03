<!DOCTYPE html>
<html lang="en">
<head>
@vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
@php
        $categories = \App\Models\Category::orderBy('priority')->get();
    @endphp
    <div class="bg-blue-600 text-white flex justify-between px-12 py-1">
        <div class="flex gap-2">
            <p>phone</p>
            <p>Address</p>
            <p>Email</p>
        </div>
        @auth 
        <div class="flex gap-2">
            hi, {{auth()->user()->name}}
            <form action="{{route('logout')}}" method="post"
            class="inline">
            @csrf
            <button type="submit" class="text-white">logout</button>
        </form>
        </div>
        @else
        <a href="{{route('login')}}">login</a>
        @endauth
    </div>

    <nav class="bg-white shadow px-4 flex justify-between sticky top-0 py-4">
        <h1 class="font-bold text-xl">LOGO</h1>
        <ul class="flex gap-3">
            <li><a href="{{('/')}}">Home</a></li>
            @foreach($categories as $category)
                <li><a href="{{route('categoryproduct',$category->id)}}">{{$category->name}}</a></li>
            @endforeach
            <li></li>

        </ul>
    </nav>
            @yield('content')
    <footer class="bg-gray-800 text-white py-4 text-center">
        <p>&copy; 2025 my site</p>
        <footer>

</body>
</html>
    