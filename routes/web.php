<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\HomePostController;
use App\Http\Controllers\SessionsController;

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

Route::get('/', [HomePostController::class, 'index'])->middleware('guest');

Route::get('/posts', [PostController::class, 'index'])->middleware('guest');
Route::get('posts/post', [PostController::class, 'show'])->middleware('guest');

Route::get('register', [AccountController::class, 'create'])->middleware('guest');
Route::post('register', [AccountController::class, 'store'])->middleware('guest');
Route::get('{user:username}/myaccount', [AccountController::class, 'show'])->middleware('auth');
Route::get('{user:username}/myaccount/edit', [AccountController::class, 'edit'])->middleware('auth');
Route::patch('{user:username}/myaccount', [AccountController::class, 'update'])->middleware('auth');
Route::delete('{user:username}/myaccount', [AccountController::class, 'destroy'])->middleware('auth');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('sessions', [SessionsController::class, 'store'])->middleware('guest');
Route::post('{user:username}/logout', [SessionsController::class, 'destroy'])->middleware('auth');

Route::get('{user:username}/posts/{post:slug}', [MyPostController::class, 'show'])->middleware('auth');
Route::get('{user:username}/posts/create-post', [MyPostController::class, 'create'])->middleware('auth');
Route::post('{user:username}/posts/{post}', [MyPostController::class, 'store'])->middleware('auth');
Route::get('{user:username}/posts/{post:slug}/edit', [MyPostController::class, 'edit'])->middleware('auth');
Route::patch('{user:username}/posts/{post}', [MyPostController::class, 'update'])->middleware('auth');
Route::delete('{user:username}/posts/{post}', [MyPostController::class, 'destroy'])->middleware('auth');







/*
users - create, destroy, show, store, edit, update, index.

this is both specific to the auth user, and actions for read-only. Split them.

AccountController - create, store, edit, update, destroy



posts from all/any user(s) - index, show
posts belonging to me - create, store, edit, update, index, show, destroy.
categories appended to posts - 

*/


