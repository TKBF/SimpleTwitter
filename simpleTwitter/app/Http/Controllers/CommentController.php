<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
class CommentController extends Controller
{
    public function index(){

    }

    public function store(Request $request, Post $post){
        $this ->validate($request,[
            'body'=> 'required'
        ]);
        $post->comments()->create([
            'body' =>$request->body,
            'user_id' => $request->user()->id,
            
        ]);
        
        return back();
    }
    

}
