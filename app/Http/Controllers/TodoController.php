<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    function addTodoFrom(){
        return view('HomePage');
    }

    function allTodos(){
        $Todos = Todo::orderBy('deadline', 'asc')->get();
        return view('AllTodos', compact('Todos'));
    }

    function storeTodo(Request $request){
        // validate the incoming data and redirect back with errors if validation fails
        $request->validate([
            'title' => 'required|min:3|max:100',
            'description' => 'nullable|max:255',
            'deadline' => 'nullable|after_or_equal:today',
        ],[
            'title.required' => 'The title field is required.',
            'title.min' => 'The title must be at least 3 characters.',
            'title.max' => 'The title may not be greater than 100 characters.',
            'description.max' => 'The description may not be greater than 255 characters.',
            'deadline.after_or_equal' => 'The deadline must be a date after or equal to today.',
        ]);
        // If validation passes, you can proceed to store the todo item in the database
        $Todo= Todo::create($request->all());
        return redirect()->back()->with('success', 'Todo item created successfully!');
}
    function deleteTodo($id){
        Todo::find($id)->delete();
        return back();

    }
    function editTodo($id){
        $Todo = Todo::find($id);
        return view('Edit', compact('Todo'));
    }
    function updateTodo($id, Request $request){
        // validate the incoming data and redirect back with errors if validation fails
        $request->validate([
            'title' => 'required|min:3|max:100',
            'description' => 'nullable|max:255',
            'deadline' => 'nullable|after_or_equal:today',
        ],[
            'title.required' => 'The title field is required.',
            'title.min' => 'The title must be at least 3 characters.',
            'title.max' => 'The title may not be greater than 100 characters.',
            'description.max' => 'The description may not be greater than 255 characters.',
            'deadline.after_or_equal' => 'The deadline must be a date after or equal to today.',
        ]);
        // If validation passes, you can proceed to update the todo item in the database
        $Todo = Todo::find($id);
        $Todo->update($request->all());
        return redirect()->route('todos')->with('success', 'Todo item updated successfully!');
    }
}