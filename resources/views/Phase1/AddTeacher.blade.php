@extends('Phase1.Phase1Layout')

@section('content')

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
    <tr id="row1">
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div></td>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div</td>
      <td><div class="form-group">
        <select class="form-control" id="sel1">
        <option>Professor</option>
        <option>Associate Professor</option>
        <option>Assistant Professor</option>
        <option>Lecturer</option>
        </select></div>
      <td><div class="form-group c-box"><input type="checkbox" class= "teacher-checkbox" id="IsActive" name="IsActive" value="Active"></div></td>
      <td><div class="form-group">
      <button class="btn btn-primary btn-edit" onclick = "edit()" id="edit"> Edit </button>
      <button class="btn btn-primary btn-edit" style= "display:none" onclick = "Submit()" id="submit1"> Submit </button>
      <button class="btn btn-primary btn-edit" style= "display:none" onclick = "DeleteRow()" id="delete"> Delete </button>
      </div></td>
    </tr>
    <tr>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div></td>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div</td>
      <td><div class="form-group">
        <select class="form-control" id="sel1">
        <option>Professor</option>
        <option>Associate Professor</option>
        <option>Assistant Professor</option>
        <option>Lecturer</option>
        </select></div>
      <td><div class="form-group c-box"><input type="checkbox" class= "teacher-checkbox" id="IsActive" name="IsActive" value="Active"></div></td>
      <td><div class="form-group"><button class="btn btn-primary btn-edit" id="login"> Edit </button></div></td>
    </tr>
    <tr>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div></td>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div</td>
      <td><div class="form-group">
        <select class="form-control" id="sel1">
        <option>Professor</option>
        <option>Associate Professor</option>
        <option>Assistant Professor</option>
        <option>Lecturer</option>
        </select></div>
      <td><div class="form-group c-box"><input type="checkbox" class= "teacher-checkbox" id="IsActive" name="IsActive" value="Active"></div></td>
      <td><div class="form-group"><button class="btn btn-primary btn-edit" id="login"> Edit </button></div></td>
    </tr>
    <tr>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div></td>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div</td>
      <td><div class="form-group">
        <select class="form-control" id="sel1">
        <option>Professor</option>
        <option>Associate Professor</option>
        <option>Assistant Professor</option>
        <option>Lecturer</option>
        </select></div>
      <td><div class="form-group c-box"><input type="checkbox" class= "teacher-checkbox" id="IsActive" name="IsActive" value="Active"></div></td>
      <td><div class="form-group"><button class="btn btn-primary btn-edit" id="login"> Edit </button></div></td>
    </tr>

    <tr style="display:none" id = "NewRow">
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div></td>
      <td><div class="form-group"><input type="text" class="form-control" id="inputDefault"></div</td>
      <td><div class="form-group">
        <select class="form-control" id="sel1">
        <option>Professor</option>
        <option>Associate Professor</option>
        <option>Assistant Professor</option>
        <option>Lecturer</option>
        </select></div>
      <td><div class="form-group c-box"><input type="checkbox" class= "teacher-checkbox" id="IsActive" name="IsActive" value="Active"></div></td>
      <td><div class="form-group"><button class="btn btn-primary btn-edit" onclick = "AddMore_Submit()" id="submit"> Submit </button></div></td>
    </tr>
  </tbody>
</table>

@endsection