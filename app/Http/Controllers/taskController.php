<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\task;

class taskController extends Controller
{   
    public function index(){
        $task=task::all();
        $data=compact('task');
        return view("welcome")->with($data);
    }

    public function store(Request $request){
        $request->validate(
            [
                'name' => 'required',
                'work' => 'required',
                'date' => 'required',
            ]
        );
        $task = new task;
        $task->name=$request['name'];
        $task->work=$request['work'];
        $task->date=$request['date'];
        $task->save();

        return redirect(route("home"));
    }

    public function delete($id){
        task::find($id)->delete();
        return redirect(route("home"));
    }
    public function edit ($id){
        $task=task::find($id);
        $data=compact('task');
        return view("update")->with($data);
    }

    public function updateData(Request $request){
        $request->validate(
            [
                'name' => 'required',
                'work' => 'required',
                'date' => 'required',
            ]
        );
        $id=$request['id'];
        $task = task::find($id);
        $task->name=$request['name'];
        $task->work=$request['work'];
        $task->date=$request['date'];
        $task->save();

        return redirect(route("home"));
    }
}
