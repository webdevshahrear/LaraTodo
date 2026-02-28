<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TodoController::class, 'addTodoFrom']) ->name('home');
Route::get('all-todos', [TodoController::class, 'allTodos']) ->name('todos');
