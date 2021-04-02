
@extends('layout.app')
@section('content')

<div class = "flex justify-center">
    <div class="w-8/12 bg-white p-5 mb-4 rounded-lg">

    <x-post :posts="$post"/>

<hr class="my-4 mb-4">
    <form action="{{route('comment.posts',$post)}}" method ="post" class="mb-2">
        @csrf
        
        
        <div class = "mb-4">
            <label for="body"class = "sr-only">Body</label>
            <textarea name = "body" id = "body" cols="30" rows ="1" placeholder="What's Up?"
            class="bg-gray-100 border-2 w-full p-4 rounded-lg
            @error('body') 
            border-red-500 @enderror"></textarea>
            @error('body')
            
            <div class="text-red-500 mt-2 text-sm">
                {{$message}}
            </div>
            @enderror
        </div>    

        <div>
            <button type="submit" 
            class="bg-blue-500 text-white px-4 py-1 rounded font-light">
            Post</button> 
        </div>
    </form>
    <hr class ="mb-4">
  @if ($comments->count())
  @foreach($comments as $comment)
  <div>
  <a href=""class="font-bold">{{$comment->user->name}}</a>
  <span class="text-gray-600 text-sm">{{ $comment->user->username }}</span>
    <span class="text-gray-600 text-sm">-</span>
    <span class="text-gray-600 text-sm">{{$comment->created_at->diffForHumans()}}</span>
    <p class="mb-2">{{ $comment ->body}}</p>

  
  </div>
  @endforeach

  @endif
    </div>
   
 </div>
@endsection