@extends('layout.app')
@section('content')

<script src="https://kit.fontawesome.com/c883e65381.js" crossorigin="anonymous"></script>




@auth
<div class = "flex justify-center mb-4">
    <div class="w-8/12 bg-white p-6 rounded-lg">
    <form action="{{route('post')}}" method ="post" class="mb-2">
        @csrf
        
        
        <div class = "mb-4">
            <label for="body"class = "sr-only">Body</label>
            <textarea name = "body" id = "body" cols="30" rows ="4" placeholder="What's Up?"
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
            class="bg-blue-500 text-white px-4 py-2 rounded font-light"
            id="ajax-submit">
            Post</button> 
        </div>
    </form>
    </div>
    


</div>
@endauth



     @if ($post->count())
        @foreach ($post as $posts)
        <div class = "flex justify-center">
    <div class="w-8/12 bg-white p-5 mb-4 rounded-lg">
        <x-post :posts="$posts" />
        </div>    
</div>
     @endforeach
     
    @else
    @endif
    
    
        
@endsection
