@extends('layouts.master');
@section('content');


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
      <td><a href="">
        @if(!$task->status)
        {{$task->content}}
        @else
        <strike class='red.text'>{{$task->content}}</strike>
        @endif
      </a></td>
      @isAdmin
      <td>{{$task->user->name}}</td>
      @endisAdmin
      <td><a title='edit' href="{{route('edit', $task ->id)}}"><i class='small material-icons'>edit</i></a></td>
      <td><a title='delete' onClick='return confirm('Delete Task?')' href="{{route('delete', $task ->id)}}"><i class='small material-icons'>delete_forever</i></a></td>
    </tr>
    @endforeach

  </tbody>
</table>
<ul class="pagination">
  <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
  <li class="active"><a href="#!">1</a></li>
  <li class="waves-effect"><a href="#!">2</a></li>
  <li class="waves-effect"><a href="#!">3</a></li>
  <li class="waves-effect"><a href="#!">4</a></li>
  <li class="waves-effect"><a href="#!">5</a></li>
  <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
</ul>

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

@isEmployee
<br><br><br>
<form class="col s12" action="">
  <div class="input-field">
    <select>
      <option value="" disabled selected>Send a request to: </option>
      <option value="2">Person 2</option>
      <option value="3">Person 3</option>
      <option value="4">Person 4</option>
    </select>
    <label>Send Request</label>
  </div>
  <a class="waves-effect waves-light btn">Send Request</a>
</form>
@endisEmployee

@isAdmin
<br><br><br>
<ul class="collection with-header">
  <li class="collection-header">
    <h4>Coworkers</h4></li>
  <li class="collection-item">
    <div>Shaun Seidman<a href="#!" class="secondary-content">delete</a></div>
  </li>
  <li class="collection-item">
    <div>Person 2<a href="#!" class="secondary-content">delete</a></div>
  </li>
  <li class="collection-item">
    <div>Person 3<a href="#!" class="secondary-content">delete</a></div>
  </li>
  <li class="collection-item">
    <div>Person 4<a href="#!" class="secondary-content">delete</a></div>
  </li>
</ul>
@endisAdmin
@endsection
