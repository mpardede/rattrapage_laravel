<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        return view('index', [
            'tasks' => \App\Models\Task::all(),
        ]);
    }

    public function show($id){
           $data = Task::find($id);
           return view('task', ['tasks' => $data]);
    }

    public function completed(Request $request){

        $data = Task::Find($request->id);
        $data->completed=$request->completed;
        $data->save();

        return back()->with('Success','Task Completed');
            
    }
}