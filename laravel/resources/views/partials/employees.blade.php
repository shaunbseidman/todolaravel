@isAdmin
<div class="input-field col s12">
  <select name="assignTo">
    <option value="" disabled selected>Assign to: </option>
    <option value="{{Auth::user()->id}}">To Myself</option>
    <option value="2">Person 2</option>
    <option value="3">Person 3</option>
    <option value="4">Person 4</option>
</select>
  <label>Assign Task</label>
</div>

@endisAdmin
