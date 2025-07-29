<?php

declare(strict_types=1);

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;

// Home page
Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('blog', [BlogController::class,'index'])->name('blog.index');

Route::get('/blog/{slug}',[BlogController::class,'show'])->name('blog.show');


Route::get('/talks', function () {
    return view('pages.talks.index');
})->name('talks.index');

Route::get('/talks/{slug}', function ($slug) {
    // In a real application, you would fetch the talk from the database
    return view('pages.talks.show', ['slug' => $slug]);
})->name('talks.show');

// Projects routes
Route::get('/projects', function () {
    return view('pages.projects.index');
})->name('projects.index');

Route::get('/projects/{slug}', function ($slug) {
    // In a real application, you would fetch the project from the database
    return view('pages.projects.show', ['slug' => $slug]);
})->name('projects.show');

// Contact page
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function (): void {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Settings routes
    Route::get('settings', [SettingController::class, 'index'])->name('settings.index');
    Route::get('categories', CategoryController::class)->name('categories.index');
    Route::get('posts', PostController::class)->name('posts.index');
});

require __DIR__.'/auth.php';
