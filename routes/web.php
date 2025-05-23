<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\PublicProfileController;
use App\Http\Controllers\PDFController;

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('home');
    });

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['verified'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::resource('projects', ProjectController::class);
    Route::resource('skills', SkillController::class)->only(['index', 'create', 'store', 'destroy']);

    Route::get('/profile/{username}', [PublicProfileController::class, 'show'])->name('profile.show');
    Route::get('/pdf/{username}', [PDFController::class, 'generate'])->name('pdf.generate');
});

require __DIR__.'/auth.php';
