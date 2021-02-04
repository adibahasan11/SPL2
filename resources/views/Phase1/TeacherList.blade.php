@extends('Layouts.ReportsLayout')

@section('content')
<div class = "table-holder">
<table class="table table-hover table-bordered-2">
  <thead class="p1">
    <tr>
      <th scope="col">Full Name</th>
      <th scope="col">Initials</th>
      <th scope="col">Designation</th>
      <th scope="col">IsActive?</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($teachers as $teacher)
<tr>
  <td>{{ $teacher->Name }}</td>
  <td>{{ $teacher->Initials }}</td>
  <td>{{ $teacher->Designations }}</td>
  <td>{{ $teacher->IsActive }}</td>
</tr>
 @endforeach

 </tbody>
</table>
</div>
@endsection