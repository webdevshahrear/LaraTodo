<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TodoController::class, 'addTodoFrom']) ->name('home');
Route::get('/edit/{id}', [TodoController::class, 'editTodo']) ->name('edit');
Route::get('all-todos', [TodoController::class, 'allTodos']) ->name('todos');
Route::post('/store', [TodoController::class, 'storeTodo']) ->name('store');
Route::post('/update/{id}', [TodoController::class, 'updateTodo']) ->name('update');
Route::get('/delete/{id}', [TodoController::class, 'deleteTodo']) ->name('delete');

