@extends('layout.app')
@section('content')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<div class = "flex justify-center">
    <div class="w-4/12 bg-white p-6 rounded-lg">

    @if (session('status'))
    <div class="text-red-500 p-2 text-center">
    {{session('status')}}
</div>
    @endif

    <form action="{{route('register')}}" method ="post">

        @csrf

      

        <div class = "mb-4">
            <label for="name "class = "sr-only">Name</label>
            <input type="text" name = "name" id = "name" placeholder="Name"
            class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') 
            border-red-500 @enderror" value="{{ old('name') }}">
            @error('name')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class = "mb-4">
            <label for="username "class = "sr-only">Username</label>
            <input type="text" name = "username" id = "username" placeholder="Username"
            class="bg-gray-100 border-2 w-full p-4 rounded-lg
            @error('username') 
            border-red-500 @enderror" value="{{ old('username') }}">
            @error('username')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>
        
        <div class = "mb-4">
            <label for="email "class = "sr-only">Email</label>
            <input type="text" name = "email" id = "email" placeholder="Email"
            class="bg-gray-100 border-2 w-full p-4 rounded-lg
            @error('email') 
            border-red-500 @enderror" value="{{ old('email') }}">
            @error('email')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class = "mb-4">
            <label for="password "class = "sr-only">Password</label>
            <input type="password" name = "password" id = "password" placeholder="Password"
            class="bg-gray-100 border-2 w-full p-4 rounded-lg
            @error('password') 
            border-red-500 @enderror" value="">
            @error('password')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class = "mb-4">
            <label for="password "class = "sr-only">Password</label>
            <input type="password" name = "password_confirmation" id = "password_confirmation" placeholder="Confirm Password"
            class="bg-gray-100 border-2 w-full p-4 rounded-lg
            @error('name') 
            border-red-500 @enderror" value="">
            @error('password_confirmation')
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>

        <div>
            <button type="submit" 
            class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">
            Register</button> 
        </div>

    </form>


    <div class="flex justify-center mt-4">
        <label for="" class="text-xs mr-2">have an account? </label>
        <a href="{{route('login')}}" class = "text-xs text-blue-500"> login</a>
    </div>

</div>

</div>
@endsection




