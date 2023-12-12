<?php

use App\Http\Controllers\LeaderboardController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('welcome');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::view('/admin', 'admin.admin-dashboard')->name('admin.dashboard');
    Route::view('admin/add-task', 'admin.add-task')->name('admin.add-task');
    Route::get('admin/edit-tasks', [TasksController::class, 'showAllTasks'])->name('admin.edit-tasks');
    Route::get('admin/edit-task/{id}', [TasksController::class, 'edit'])->name('admin.edit-task');
    Route::patch('admin/edit-task/{id}', [TasksController::class, 'update'])->name('admin.update-task');
    Route::delete('admin/delete-task/{id}', [TasksController::class, 'destroy'])->name('admin.destroy-task');
});

Route::middleware('auth')->group(function () {
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/tasks/check', [TasksController::class, 'check'])->name('tasks.check');
    Route::get('task/{id}', [TasksController::class, 'show'])->name('tasks.show');
    Route::resource('tasks', TasksController::class)->only(['index', 'store']);
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::get('/leaderboard', LeaderboardController::class)->name('leaderboard');
    Route::get('/leaderboard/pdf', [LeaderboardController::class, 'exportToPDF'])->name('leaderboard.exportToPDF');
    Route::get('/leaderboard/export-to-csv', [LeaderboardController::class, 'exportToCSV'])->name('leaderboard.exportToCSV');
    Route::view('/learn', 'learn')->name('learn');
    Route::view('/about', 'about')->name('about');
});

require __DIR__ . '/auth.php';
