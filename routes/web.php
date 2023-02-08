<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('tasks', TaskController::class)->middleware(['auth', 'verified'])->only(['index','store', 'update', 'destroy']);

Route::get('tasks/fulfilled', [TaskController::class, 'doneIndex'])->name('tasks.doneIndex')->middleware(['auth', 'verified']);

Route::get('tasks/tofulfil', [TaskController::class, 'toDoIndex'])->name('tasks.toDoIndex')->middleware(['auth', 'verified']);

Route::put('tasks/{id}/fulfil', [TaskController::class, 'fulfil'])->name('tasks.fulfil')->middleware(['auth', 'verified']);

Route::put('tasks/{id}/unfulfil', [TaskController::class, 'unFulfil'])->name('tasks.unFulfil')->middleware(['auth', 'verified']);

require __DIR__.'/auth.php';
