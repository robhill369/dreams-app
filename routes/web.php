<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MyPostController;
use App\Http\Controllers\HomePostController;
use Illuminate\Support\Facades\Auth;

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

// Would ideally want to prefix URI auth users with their username, as per auth-only pages.

Route::get('/', [HomePostController::class, 'index']);

Route::get('/posts', [PostController::class, 'index'])
        ->name('posts');     
Route::get('/posts/{post:slug}', [PostController::class, 'show']);


// Upon clicking on post's author's username...
// Route::get('/{post:username}', [MemberController::class, 'show'])
//         ->middleware('auth');

// this directory contains all Controllers required for authentication.
require __DIR__.'/auth.php';

Route::group(['prefix' => '/{user}', 'middleware' => ['auth']], function() {
    
    Route::get('/myaccount', [UserController::class, 'show']);            
    Route::get('/myaccount/edit', [UserController::class, 'edit']);              
    Route::patch('/myaccount', [UserController::class, 'update']);
    Route::delete('/myaccount', [UserController::class, 'destroy']);

    Route::get('/myposts', [MyPostController::class, 'index'])
        ->name('myposts.index'); 
    Route::get('/myposts/{post:slug}', [MyPostController::class, 'show'])
        ->name('myposts.show');
    Route::get('/create-post', [MyPostController::class, 'create'])
        ->name('create-post');
    Route::post('/myposts/post', [MyPostController::class, 'store'])
        ->name('store-post');
    Route::get('/myposts/{post:slug}/edit', [MyPostController::class, 'edit']);
    Route::patch('/myposts/{post}', [MyPostController::class, 'update']);
    Route::delete('/myposts/{post}', [MyPostController::class, 'destroy']);
});



//ROUTES SUPERSEDED BY LARAVEL BREEZE - may consolidate controllers later.

// Route::get('register', [UserController::class, 'create'])->middleware('guest');
// Route::post('register', [UserController::class, 'store'])->middleware('guest');


// Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
// Route::post('sessions', [SessionsController::class, 'store'])->middleware('guest');
// Route::post('{user:username}/logout', [SessionsController::class, 'destroy'])->middleware('auth');

// Route::get('/forgot-password', function () {
//     return view('auth.forgot-password');
// })->middleware('guest')->name('password.request');


Route::get('/dashboard', function () {return view('dashboard');})
    ->middleware(['auth'])
    ->name('dashboard');

/*
users - create, destroy, show, store, edit, update, index.
this is both specific to the auth user, and actions for read-only. Split them.
AccountController - create, store, edit, update, destroy
posts from all/any user(s) - index, show
posts belonging to me - create, store, edit, update, index, show, destroy.
categories appended to posts - 
*/