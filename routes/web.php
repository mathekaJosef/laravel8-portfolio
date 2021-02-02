<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserTaskController;
use App\Http\Controllers\MarkController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/tasks', [UserTaskController::class, 'index'])->name('tasks');

Route::get('/create_task', [TaskController::class, 'index'])->name('create.task');
Route::post('/create_task', [TaskController::class, 'store']);
Route::get('/task/{id}/edit', [TaskController::class, 'edit'])->name('task.edit');
Route::post('/task/{id}/edit', [TaskController::class, 'update']);
Route::delete('/delete_task/{task}', [TaskController::class, 'destroy'])->name('task.delete');

Route::post('/mark_task/{task}', [MarkController::class, 'store'])->name('task.mark');

Route::delete('/unmark_task/{task}', [MarkController::class, 'destroy'])->name('task.unmark');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');