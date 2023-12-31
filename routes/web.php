<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FighterController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(PostController::class)->group(function () {
    Route::get('/', 'index')->name('posts.index');
    Route::get('/posts/create', 'create')->name('posts.create');
    Route::get('/posts/{post}', 'show')->name('posts.show');
    Route::post('/posts', 'store')->name('posts.store');
    Route::get('/posts/{post}/edit', 'edit')->name('posts.edit');
    Route::put('/posts/{post}', 'update')->name('posts.update');
    Route::delete('/posts', 'delete')->name('posts.delete');
});

Route::controller(FighterController::class)->name('fighters.')->group(function () {
    Route::get('/fighters', 'index')->name('index');
    Route::get('/fighters/{fighter}', 'show')->name('show');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
