<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomePostController;

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

Route::get('/', [HomePostController::class, 'index']);

Route::get('/posts', [PostController::class, 'index']);
        
Route::get('posts/post', [PostController::class, 'show']);
                
// add {user:username} to the above URL. Means that post slugs don't have to be unique

// this directory contains all Controllers required for authentication.

require __DIR__.'/auth.php';

Route::get('{user:username}/myaccount', [UserController::class, 'show'])
                ->middleware('auth');
Route::get('{user:username}/myaccount/edit', [UserController::class, 'edit'])
                ->middleware('auth');
Route::patch('{user:username}/myaccount', [UserController::class, 'update'])
                ->middleware('auth');
Route::delete('{user:username}/myaccount', [UserController::class, 'destroy'])
                ->middleware('auth');


Route::get('admin/posts/{post:slug}', [MyPostController::class, 'show'])
                ->middleware('auth');
Route::get('admin/posts/create-post', [MyPostController::class, 'create'])
                ->middleware('auth');
Route::post('admin/posts/{post}', [MyPostController::class, 'store'])
                ->middleware('auth');
Route::get('admin/posts/{post:slug}/edit', [MyPostController::class, 'edit'])
                ->middleware('auth');
Route::patch('admin/posts/{post}', [MyPostController::class, 'update'])
                ->middleware('auth');
Route::delete('admin/posts/{post}', [MyPostController::class, 'destroy'])
                ->middleware('auth');


//ROUTES SUPERSEDED BY LARAVEL BREEZE - may consolidate controllers later.

// Route::get('register', [UserController::class, 'create'])->middleware('guest');
// Route::post('register', [UserController::class, 'store'])->middleware('guest');


// Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
// Route::post('sessions', [SessionsController::class, 'store'])->middleware('guest');
// Route::post('{user:username}/logout', [SessionsController::class, 'destroy'])->middleware('auth');

// Route::get('/forgot-password', function () {
//     return view('auth.forgot-password');
// })->middleware('guest')->name('password.request');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

/*
users - create, destroy, show, store, edit, update, index.
this is both specific to the auth user, and actions for read-only. Split them.
AccountController - create, store, edit, update, destroy
posts from all/any user(s) - index, show
posts belonging to me - create, store, edit, update, index, show, destroy.
categories appended to posts - 
*/


