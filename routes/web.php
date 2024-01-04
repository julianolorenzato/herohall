<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // $posts = Post::where('user_id', auth()->id())->get();
    $posts = [];
    if (auth()->check()) {
        $posts = auth()->user()->posts()->latest()->get();
    }

    return view('home', ['posts' => $posts]);
});

Route::post('/register', [UserController::class, 'register']);
Route::post('/logout', [UserController::class, 'logout']);
Route::post('/login', [UserController::class, 'login']);

Route::post('/createPost', [PostController::class, 'create']);
Route::get('/editPost/{post}', [PostController::class, 'showEdit']);
Route::put('/editPost/{post}', [PostController::class, 'edit']);
Route::delete('/deletePost/{post}', [PostController::class, 'delete']);
