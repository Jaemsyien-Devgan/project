<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\generateQrCode;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\testimonialsController;
use App\Http\Controllers\todolist;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProjectController::class, 'show']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/todolist', [todolist::class, 'index'])->name('todolist');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

Route::post('/todolist', [todolist::class, 'store'])->name('todolist.post');
Route::put('/todolist/{id}', [todolist::class, 'update'])->name('todolist.update');
Route::delete('/todolist/{id}', [todolist::class, 'destroy'])->name('todolist.delete');


Route::get('/project', [ProjectController::class, 'index'])->name('project.index');
Route::get('/project/create', [ProjectController::class, 'create'])->name('project.create');
Route::post('/project', [ProjectController::class, 'store'])->name('project.store');
Route::get('/project/{project}/edit', [ProjectController::class, 'edit'])->name('project.edit');
Route::put('/project/{project}', [ProjectController::class, 'update'])->name('project.update');
Route::get('/project/{project}', [ProjectController::class, 'destroy'])->name('project.destroy');
Route::get('pdf_generator', [ProjectController::class, 'pdf_generator_get'])->name('pdf_generator');
Route::get('/generate-qrcode', [generateQrCode::class, 'generateQrCode']);

Route::get('/testimonials', [testimonialsController::class, 'index'])->name('testimonials.index');
Route::get('/testimonials/create', [testimonialsController::class, 'create'])->name('testimonials.create');
Route::post('/testimonials', [testimonialsController::class, 'store'])->name('testimonials.store');
Route::get('/testimonials/{testimonials}/edit', [testimonialsController::class, 'edit'])->name('testimonials.edit');
Route::put('/testimonials/{testimonials}', [testimonialsController::class, 'update'])->name('testimonials.update');
Route::get('/testimonials/{testimonials}', [testimonialsController::class, 'destroy'])->name('testimonials.destroy');

require __DIR__.'/auth.php';
