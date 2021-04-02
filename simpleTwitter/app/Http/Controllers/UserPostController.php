<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserPostController extends Controller
{
    public function index(User $user)
    {
        
        $post = $user->posts()->with(['user','likes'])->get();
        return view('users.post.index',[
            'user'=>$user,
           'post'=>$post
        ]);

    }
}
