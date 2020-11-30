@extends('Layouts.ReportsLayout')

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

 </tbody>
</table>

@endsection