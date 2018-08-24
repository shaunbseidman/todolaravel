@extends('layouts.master');
@section('content');


<table>
  <thead>
    <tr>
      <th>Task</th>
      <th>Assigned to:</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <td><a href="">Do thing 1</a></td>
      <td>Shaun Seidman</td>
      <td><a title='edit' href=""><i class='small material-icons'>edit</i></a></td>
      <td><a title='delete' href=""><i class='small material-icons'>delete_forever</i></a></td>
    </tr>
    <tr>
      <td><a href="">Do thing 2</a></td>
      <td>Person 2</td>
      <td><a title='edit' href=""><i class='small material-icons'>edit</i></a></td>
      <td><a title='delete' href=""><i class='small material-icons'>delete_forever</i></a></td>
    </tr>
    <tr>
      <td><a href=""><strike>Do thing 3</strike></a></td>
      <td>Person 3</td>
      <td><a title='edit' href=""><i class='small material-icons'>edit</i></a></td>
      <td><a title='delete' href=""><i class='small material-icons'>delete_forever</i></a></td>
    </tr>
    <tr>
      <td><a href="">Do thing 4</a></td>
      <td>Person 4</td>
      <td><a title='edit' href=""><i class='small material-icons'>edit</i></a></td>
      <td><a title='delete' href=""><i class='small material-icons'>delete_forever</i></a></td>
    </tr>
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

<form class="col s12">
  <div class="row">
    <div class="input-field col s12">
      <input id="task" type="text" class="validate">
      <label for="task">New Task</label>
    </div>
  </div>
  <div class="input-field col s12">
    <select>
  <option value="" disabled selected>Assign to: </option>
  <option value="1">To Myself</option>
  <option value="2">Person 2</option>
  <option value="3">Person 3</option>
  <option value="4">Person 4</option>
</select>
    <label>Assign Task</label>
  </div>
  <a class="waves-effect waves-light btn">Add new task</a>
</form>

<br>

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


@endsection
