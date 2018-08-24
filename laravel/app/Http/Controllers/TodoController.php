<?php
  namespace App\Http\Controllers;

  use Illuminate\Http\Request;
  use App\Task;

  class ToDoController extends Controller{
    public function index(){
      $tasks=Task::all();
      return view('index',compact('tasks'));
    }


    public function store(Request $request){
      if($request->input('task')){
        $task = new Task;
        $task->content = $request->input('task');
        Auth::user()->tasks()->save($task);
      }
      return redirect()->back();
    }

    public function edit(){
      return view('edit');
    }
  }

 ?>
