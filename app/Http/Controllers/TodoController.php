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
}
