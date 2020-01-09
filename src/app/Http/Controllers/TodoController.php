<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use App\Models\Task;
use App\Http\Controllers\Controller;

class TodoController extends Controller
{
    public function index() {
        return view('todo');
    }

    public function get(Request $request){
        // return response()->json(Auth::user()->todos()->orderBy('updated_at', 'desc')->get());
        return Todo::all();
    }

    public function post(Request $request){
        $todo = new Todo();
        $todo->todo = $request->input('todo');
        // $todo->user_id = Auth::id();
        $todo->user_id = 0;
        $todo->save();
        return response("OK", 200);
    }

    public function delete($id){
        Todo::find($id)->delete();
        return response("OK", 200);;
    }

    public function update(Request $request, $id){
        $todo = Todo::find($id);
        $todo->todo = $request->input('todo');
        $todo->save();
        return response("OK", 200);
    }
}
