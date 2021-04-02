<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://kit.fontawesome.com/c883e65381.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token"content="{{ csrf_token()}}">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Test</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> 
</head>
<body class="bg-gray-200">
<nav class= "p-6 bg-white flex justify-between mb-4" >
    <ul class="flex items-center">
        @auth
        <li><a href="{{ route('home')}}"  class="p-6">Home</a></li>
        <li><a href="{{ route('post') }}"  class="p-6">Post</a></li>
        <li><a href=""  class="p-6">Profile</a></li>
        @endauth
    </ul>
    
    <ul class="flex items-center">
        @auth
        <li><form action="{{ route('logout') }}" method = "post">@csrf<button type = "submit" class="pr-6 pl-4">Logout</button></form></li>
        @endauth
        @guest
        <li><a href="{{ route('register') }}"  class="p-6">Login</a></li>
        @endguest

    </ul>
</nav>
    @yield('content')
</body>
</html>