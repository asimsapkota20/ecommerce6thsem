<!DOCTYPE html>
<html lang="en">
<head>
@vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md p-6 bg-white rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-center text-gray-700">Login</h2>
        <form class="mt-4" action="{{route('login')}}" method="POST">
            @csrf
            <div>
                <label class="block text-gray-600" for="email">Email</label>
                <input type="email" id="email" name="email" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Enter your email" required>
            </div>
            <div class="mt-4">
                <label class="block text-gray-600" for="password">Password</label>
                <input type="password" id="password" name="password" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Enter your password" required>
            </div>
            <div class="flex items-center justify-between mt-4">
                <label class="flex items-center">
                    <input type="checkbox" class="text-blue-500 form-checkbox">
                    <span class="ml-2 text-gray-600">Remember me</span>
                </label>
                <a href="#" class="text-sm text-blue-500 hover:underline">Forgot password?</a>
            </div>
            <button type="submit" class="w-full px-4 py-2 mt-4 font-bold text-white bg-blue-500 rounded-md hover:bg-blue-600">Login</button>
        </form>
        <p class="mt-4 text-sm text-center text-gray-600">Don't have an account? <a href="{{route('register')}}" class="text-blue-500 hover:underline">register</a></p>
    </div>
</div>
<!--     

    <div class="flex justify-center items-center h-screen bg-gray-200 rounded-xl">
        <div class="w-96 p-6 shadow-lg bg-white round-md" >
            <h1 class="text-3xl text-center font-semibold"> Login</h1>
            <hr class="mt-3">
            <div class="mt-3">
                <label for="username" class="block text-base mb-2">username</label>
                <input type="text" id="username" class="border w-full text-base px-2 py-1 foucs:outline-none foucs:ring-0 focus:boder-gray-600" placeholder="username">
        </div>
        <div class="mt-3">
                <label for="password" class="block text-base mb-2">password</label>
                <input type="text" id="password" class="border w-full text-base px-2 py-1 foucs:outline-none foucs:ring-0 focus:boder-gray-600" placeholder="Enter password">
        </div>
    </div> -->

</body>
</html>