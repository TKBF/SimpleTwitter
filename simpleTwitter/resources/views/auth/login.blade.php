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
    <form action="{{route('login')}}" method ="post">
        @csrf
        
        
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
       
        <div>
            <button type="submit" 
            class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">
            Login</button> 
        </div>
    </form>
    <div class="flex justify-center mt-4">
        <label for="" class="text-xs mr-2">Not yet signed up? </label>
        
        <a href="{{route('register')}}" class = "text-xs text-blue-500" > signup</a>
    </div>

</div>

</div>
@endsection