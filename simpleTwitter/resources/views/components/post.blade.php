@props(['posts' => $posts])


<div class="">

    <a href="{{ route('users.post', $posts->user) }}"class="font-bold">{{$posts->user->name}}</a>
    <span class="text-gray-600 text-sm">{{ $posts->user->username }}</span>
    <span class="text-gray-600 text-sm">-</span>
    <span class="text-gray-600 text-sm">{{$posts->created_at->diffForHumans()}}</span>
    <p class="mb-2">{{ $posts ->body}}</p>

        <div class="flex justify-between">
            <div class=" flex items-center">
                @auth
                @if (!$posts->likedBy(auth()->user()))


                <form action="{{ route('post.likes',$posts) }}" method="post" class="mr-1">
                    @csrf
                    <button type="submit" class="text-red-500"><i class="far fa-heart"></i></button>
                </form>
                @else
                <form action="{{ route('post.likes',$posts) }}" method="post" class="mr-1">
                    @csrf 
                    @method('DELETE')
                    <button type="submit" class="text-red-500"><i class="fas fa-heart"></i></button>
                </form>
                @endif
                    
                 @endauth
                <span class="text-gray-600 text-sm mr-2">{{ $posts->likes->count() }}</span>
                <a href="{{ route('post.comment', $posts->id) }}"class="text-blue-500 ml-2" ><i class="far fa-comment mr-2"></i>Comment</a>
            </div>
                    
                  
                    
                    
                <div>
                    @can('delete',$posts)
                    <form action="{{ route('post.destroy', $posts) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-blue-500 ml-2"><i class="fas fa-trash mr-2"></i>Delete</button>
                    </form> 
                @endcan
        </div>
                    
    </div>
</div>
        