<?php
  namespace App\Http\Controllers;

  use Illuminate\Http\Request;
  use App\Task;
  use App\User;
  use Illuminate\Support\Facades\Auth;


  class ToDoController extends Controller{
    public function index(){
      $tasks=Task::where('user_id',Auth::user()->id)->orderBy('created_at','DESC')->paginate(4);
      $employees = User::where('is_admin',1)->get();
      return view('index',compact('tasks','employees'));
    }


    public function store(Request $request){
      if($request->input('task')){
        $task = new Task;
        $task->content = $request->input('task');
        Auth::user()->tasks()->save($task);
      }
      return redirect()->back();
    }

    public function edit($id){
      $task = Task::find($id);
      return view('edit',['task'=>$task]);
    }

    public function update($id, Request $request){
      if($request->input('task')){
        $task = Task::find($id);
        $task->content = $request->input('task');
        $task->save();
      }
      return redirect('/');
     }

    public function delete($id  ){
      $task = Task::find($id);
      $task->delete();
      return redirect()->back();
    }

    public function updateStatus($id  ){
      $task = Task::find($id);
      $task->status = ! $task->status;
      $task->save();
      return redirect()->back();
    }

    public function sendRequest(){
    }
  }

 ?>
