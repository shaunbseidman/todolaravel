@extends('layouts.master')
@section('content')

<table>
  <thead>
    <tr>
      <th>Task</th>
      @isAdmin
      <th>Assigned to:</th>
      @endisAdmin
      <th>Edit</th>
      <th>Delete</th>
    </tr>
  </thead>

  <tbody>
    @foreach($tasks as $task)
    <tr>
      <td><a href="{{route('updateStatus', $task->id)}}">
        @if(!$task->status)
        {{$task->content}}
        @else
        <strike class='grey-text'>{{$task->content}}</strike>
        @endif
      </a></td>
      @isAdmin
      <td>{{$task->user->name}}</td>
      @endisAdmin
      <td><a title='edit' href="{{route('edit', $task ->id)}}"><i class='small material-icons'>edit</i></a></td>
      <td><a title='delete' onClick="return confirm('Delete Task?')" href="{{route('delete', $task ->id)}}"><i class='small material-icons'>delete_forever</i></a></td>
    </tr>
    @endforeach
  </tbody>
</table>

{{$tasks->links('vendor.pagination.materialize')}}

<form method="POST" action="{{route('store')}}" class="col s12">
  <div class="row">
    <div class="input-field col s12">
      <input name="task" id="task" type="text" class="validate">
      <label for="task">New Task</label>
    </div>
  </div>
  @include('partials.employees')
  <button type='submit' class="waves-effect waves-light btn">Add new task</button>
  @csrf
</form>

@isWorker
<br><br><br>
<form method="POST" class="col s12" action="{{route('sendInvitation')}}">
  <div class="input-field">
    <select name="admin">
      <option value="" disabled selected>Send a request to:</option>
      @foreach($employees as $employee)
      <option value="{{$employee->id}}">{{$employee->name}}</option>
      @endforeach
    </select>
    <label>Send Request</label>
  </div>
  <button type="submit" class="waves-effect waves-light btn">Send Request</button>
  @csrf
</form>
@endisWorker

@isAdmin
<br><br><br>
<ul class="collection with-header">
  <li class="collection-header">
    <h4>Employees</h4></li>
    @foreach($employees as $employee)
    <li class="collection-item">
      <div>{{$employee->worker->name}}<a href="{{route('deleteWorker',$employee->id)}}" class="secondary-content">delete</a></div>
    </li>
    @endforeach
</ul>
@endisAdmin
@endsection
