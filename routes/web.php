<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', [TasksController::class, 'dashboard'])->name('dashboard');
    Route::resource('tasks', TasksController::class)->only(['index', 'store']);
    Route::post('/tasks/check', [TasksController::class, 'check'])->name('tasks.check');
    Route::get('task/{id}', [TasksController::class, 'show'])->name('task');
});

Route::get('/admin', [TasksController::class, 'admin'])->middleware(['auth', 'admin']);

require __DIR__ . '/auth.php';
