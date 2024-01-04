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

Route::get('/', fn () => redirect('all'));

Route::get('/register', fn () => view('register'));
Route::get('/login', fn () => view('login'));
Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout']);

Route::get('/all', [PostController::class, 'all']);
Route::get('/yours', [PostController::class, 'yours']);
Route::get('/createPost', fn () => view('create-post'));
Route::post('/createPost', [PostController::class, 'create']);
Route::get('/editPost/{post}', [PostController::class, 'showEdit']);
Route::put('/editPost/{post}', [PostController::class, 'edit']);
Route::delete('/deletePost/{post}', [PostController::class, 'delete']);
