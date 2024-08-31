<?php

use App\Http\Controllers\TodsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TodsController::class,'index'])->name('todoList');
Route::get('/todos/create', [TodsController::class,'create'])->name('createTodo');
Route::post('/todos/store', [TodsController::class,'store'])->name('storeTodo');
Route::get('/todos/{todo}/show', [TodsController::class,'show'])->name('showTodo');
Route::get('todos/{todo}/edit', [TodsController::class,'edit'])->name('editTodo');
Route::put('todos/{todo}/update', [TodsController::class,'update'])->name('updateTodo');
Route::delete('todos/{todo}/delete',[TodsController::class,'destroy'])->name('deleteTodo');

// Route ::resource('todos', TodsController::class);


