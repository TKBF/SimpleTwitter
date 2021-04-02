<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __contruct(){
        $this->middleware(['auth'])->only(['store','destroy']);
    }
    public function index()
    {
        $post = Post::with(['user','likes'])->get();
        $post = $post->reverse();
        return view('post.posts',[
            'post' =>$post
        ]);
        
    }

    public function comment(Post $post){
        // $comments = Comment::get();
        $comments = $post->comments()->with('post')->get();
        $comments = $comments->reverse();
        return view('post.comment',[
            'post' =>$post,
            'comments'=>$comments
           
        ]);
    }

   
    public function store(Request $request)
    {
        $this->validate($request,[
            'body'=>'required'
        ]);

        $request->user()->posts()->create([
            'body'=> $request->body
        ]);

        return back();
    }
    public function destroy(Post $post, Request $request){
        $this->authorize('delete',$post);
        $post->delete();
        return back();
    }
}
