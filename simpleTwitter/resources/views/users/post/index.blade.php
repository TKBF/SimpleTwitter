
@extends('layout.app')
@section('content')
<div class = "flex justify-center">
    <div class="w-8/12 bg-white p-6 rounded-lg">
   {{ $user->name}}

@if ($post->count())
        @foreach ($post as $posts)
            <x-post :posts="$posts" />
        @endforeach

        
    @else
    
    @endif
    </div>
</div>
@endsection