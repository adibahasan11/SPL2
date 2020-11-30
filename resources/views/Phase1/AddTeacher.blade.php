@extends('Phase1.Phase1Layout')

@section('content')

@if (\Session:: has('success'))
<div class="alert alert-success">
  <p>{{\Session::get('success')}}</p>
</div> 
@endif
<form action = "/createteacher" method = "post">
@csrf
<table class="table table-hover">
  <thead class="p1">
    <tr>
      <th scope="col">Full Name</th>
      <th scope="col">Initials</th>
      <th scope="col">Designation</th>
      <th scope="col">IsActive?</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @foreach ($teachers as $teacher)
<tr>
  <td>{{ $teacher->Name }}</td>
  <td>{{ $teacher->Initials }}</td>
  <td>{{ $teacher->Designation }}</td>
  <td>{{ $teacher->IsActive }}</td>
  <td><div class="form-group">
        <button class="btn btn-primary btn-edit" onclick = "edit()" id="edit"> Edit </button></div></td>
</tr>
 @endforeach
    <tr id="row1">
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault" name="Name" required></div></td>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault" name="Initials" required></div</td>
      <td><div class="form-group">
        <select class="form-control" id="sel1" name="Designation" required>
        <option>Professor</option>
        <option>Associate Professor</option>
        <option>Assistant Professor</option>
        <option>Lecturer</option>
        </select></div>
      <td><div class="form-group c-box"><input type="checkbox" class= "teacher-checkbox" id="IsActive" name="IsActive" value="Yes"></div></td>
      <td><div class="form-group">
      <button class="btn btn-primary btn-edit" id="edit"> Submit </button>
      <button class="btn btn-primary btn-edit" style= "display:none" onclick = "Submit()" id="submit1"> Submit </button>
      <button class="btn btn-primary btn-edit" style= "display:none" onclick = "DeleteRow()" id="delete"> Delete </button>
      </div></td>
    </tr>
  </tbody>
</table>
</form>

@endsection