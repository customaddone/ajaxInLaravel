<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function getTodos(){
        $todos = Todo::all();
        // laravelではビューを介さずにreturnするとJson方式で返せる
        return $todos;
    }

    public function addTodo(Request $request) {
        $todo = new Todo;
        $todo->title = $request->title;
        $todo->save();

        $todos = Todo::all();
        return $todos;
    }

    public function deleteTodo(Request $request) {
        $todo = Todo::where('id', $request->id)->delete();

        $todos = Todo::all();
        return $todos;
    }
}
