@isAdmin
<div class="input-field col s12">
  <select name="assignTo">
    <option value="" disabled selected>Assign to:</option>
    <option value="{{Auth::user()->id}}">To Myself</option>
    @foreach($employees as $employee)
    @if($employee->worker->id == $task->user->id)
    <option selected value="{{$employee->worker->id}}">{{$employee->worker->name}}</option>
    @else
    <option value="{{$employee->worker->id}}">{{$employee->worker->name}}</option>
    @endif
    @endforeach
  </select>
<label>Assign Task</label>
</div>
@endisAdmin

<!-- <div class="input-field col s12">
  <select name="assignTo">
    <option value="" disabled selected>Assign to:</option>
    <option value="{{Auth::user()->id}}">To Myself</option>
    @foreach($employees as $employee)
    @if($employee->worker->id == $task->user->id)
    <option selected value="{{$employee->worker->id}}">{{$employee->worker->name}}</option>
    @else
    <option value="{$employee->worker->id}}">{{$employee->worker->name}}</option>
    @endif
    @endforeach
  </select>
<label>Assign Task</label>
</div> -->
