<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    function addTodoFrom(){
        return view('HomePage');
    }

    function allTodos(){
        return view('AllTodos');
    }
}
