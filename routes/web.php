<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;


/* Rutas Publicas */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/posts.show', function () {
    return view('posts.show');
});

Route::get('/show', [PostController::class, 'show'])->name('posts.show');


Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');




/* Rutas Privadas */

Route::get('/dashboard', function () {
    return view('posts.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/welcome', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('welcome');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
    Route::get('/create', [PostController::class, 'create'])->name('posts.create');
    Route::resource('posts', PostController::class);

    Route::post('/posts/{post}/like', [LikeController::class, 'toggleLike'])->name('posts.like')->middleware('auth');
    Route::post('/posts/{post}/comments', [CommentController::class, 'store'])->name('comments.store');
});

require __DIR__ . '/auth.php';
