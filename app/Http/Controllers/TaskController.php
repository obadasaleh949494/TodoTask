<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
class TaskController extends Controller
{
    public function getTasks(){
         return Task::all();
    }
    public function createTask(Request $request){
        return Task::create([
            'title'=> $request['title'],
            'owner'=> $request['owner'],
            'description'=> $request['description']
        ]);
    }
    public function updateTask(Request $request,$id)
    {
        $task=Task::find($id);
        if(!$task)
            return 'error';
        return  response()->json($task->update($request->all()));
        
    }
    public function deleteTask($id)
    {
        $task=Task::find($id);
        if(!$task)
            return 'error';
        $task->delete();
        return 'deleted';
    }
}
