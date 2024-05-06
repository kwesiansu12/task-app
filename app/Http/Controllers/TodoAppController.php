<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Task;

class TodoAppController extends Controller
{
    //
    public function index(){
        return view('todoapp.index')->with("tasks",Task::all());
    }

    public function store(Request $request){
        //return "sample text";
       // Log::info($request);
        $task= new Task();
        $task->content = $request->content;
        $task->save();

        return redirect(route("todoapp.index"));

    }
}
