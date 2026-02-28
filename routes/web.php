<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TodoController::class, 'addTodoFrom']);
Route::get('all-todos', [TodoController::class, 'allTodos']);
