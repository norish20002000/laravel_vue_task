<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use App\Models\Task;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    public function index() {
        return view('todo');
    }

    public function get(Request $request){
        if(Auth::check()) {
            // var_dump(Auth::user()->todos());exit;
            // return response()->json(Auth::user()->todos()->orderBy('updated_at', 'desc')->get());
            return response()->json(DB::table('todos')->where('user_id', Auth::id())->orderBy('updated_at', 'desc')->get());
        } else {
            // var_dump(Auth::user());exit;
            return response()->json(DB::table('todos')->Where('user_id', 0)->orderBy('updated_at', 'desc')->get());
        }
        // return Todo::all();
    }

    public function post(Request $request){
        $todo = new Todo();
        $todo->todo = $request->input('todo');

        if(Auth::check()) {
            $todo->user_id = Auth::id();
        } else {
            $todo->user_id = 0;
        }

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
