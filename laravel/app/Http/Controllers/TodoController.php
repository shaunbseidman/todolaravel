<?php
  namespace App\Http\Controllers;

  use Illuminate\Http\Request;
  use App\Task;
  use App\User;
  use App\Invitation;
  use Illuminate\Support\Facades\Auth;


  class ToDoController extends Controller{
    public function index(){


      if(Auth::user()->is_admin){
        $employees = Invitation::where('admin_id',Auth::user()->id)->where('accepted',1)->get();
        $invitations = Invitation::where('admin_id',Auth::user()->id)->where('accepted',0)->get();
        $tasks=Task::where('user_id',Auth::user()->id)->orWhere('admin_id',Auth::user()->admin_id)->orderBy('created_at','DESC')->paginate(4);
      } else {
        $invitations=[];
        $tasks=Task::where('user_id',Auth::user()->id)->orderBy('created_at','DESC')->paginate(4);
        $employees = User::where('is_admin',1)->get();
      }
      return view('index',compact('tasks','employees','invitations'));
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

    public function sendInvitation(Request $request){
      if((int) $request->input('admin')>0
      && !Invitation::where('worker_id'.Auth::user()->id)->where('admin_id',$request->input('admin'))->exists()
      ){
        $invitation = new Invitation;
        $invitation->worker_id=Auth::user()->id;
        $invitation->admin_id=(int) $request->input('admin');
        $invitation->save();
      }
      return redirect()->back();
    }
    public function acceptInvitation($id){
      $invitation = Invitation::find($id);
      $invitation ->accepted = true;
      $invitation->save();
      return redirect()->back();

    }
    public function denyInvitation($id){
      $invitation = Invitation::find($id);
      $invitation = delete();
      return redirect()->back();
    }
  }

 ?>
