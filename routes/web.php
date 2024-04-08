<?php

use App\Http\Controllers\AdminJobController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;


// Route::get('/categories/{category}', [CategoryController::class, 'index'])->name('category');

// Route::get('/categories/{category}', [SiteController::class, 'show'])->name('category');

Route::get('/', [SiteController::class, 'show'])->name('home');

Route::get('/category/{Category:id}', [ViewController::class,'show'])->name('view');

Route::resource('/job/{job}/comment', CommentController::class);

Route::post('/jobs/{job}/comments/{comment}/reply', [CommentController::class, 'reply'])->name('comment.reply');

Route::resource('/SAQ', JobController::class);

Route::resource('/job', AdminJobController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';