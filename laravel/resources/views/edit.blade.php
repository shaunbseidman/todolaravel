@extends('layouts.master')
@section('content')


<form class="col s12">
  <div class="row">
    <div class="input-field col s12">
      <input value="Task content to edit" id="task2" type="text" class="validate">
      <label for="task2">Edit Item</label>
    </div>
  </div>

@include('partials.employees')

  <a class="waves-effect waves-light btn">Edit Item</a>
</form>

@endsection
