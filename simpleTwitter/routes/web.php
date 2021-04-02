<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\registerController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostLikeController;
use App\Http\Controllers\CommentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/users/{user:username}',[UserPostController::class,'index'])->name('users.post');



Route::get('/home',[HomeController::class,'index'])
->name('home')
->middleware('auth');

Route::get('/post/{post}',[CommentPosts::class,'index'])->name('commet');

Route::post('/logout',[LogoutController::class,'store'])->name('logout');

Route::get('/register',[registerController::class,'index'])->name('register');
Route::post('/register',[registerController::class,'store']);

Route::get('/',[LoginController::class,'index'])->name('login');
Route::post('/',[LoginController::class,'store']);

Route::get('/post',[PostController::class,'index'])->name('post');
Route::get('/post/{post}',[PostController::class,'comment'])->name('post.comment');
Route::post('/post',[PostController::class,'store']);
Route::delete('/post/{post}',[PostController::class,'destroy'])->name('post.destroy');

Route::post('/post/{post}/likes',[PostLikeController::class,'store'])->name('post.likes');
Route::delete('/post/{post}/likes',[PostLikeController::class,'destroy'])->name('post.likes');


Route::get('/comments',[CommentController::class,'index'])->name('comment');
Route::post('/comments',[CommentController::class,'store']);
Route::post('/post/{post}/comments',[CommentController::class,'store'])->name('comment.posts');
