@extends('Layouts.admin')

@section('content')
<div class = "table-holder"><br>
<div  align="right">
        <a href="{{url('/Teacherpdf')}}" class="btn btn-outline-danger btn-sm">Get PDF report</a>
</div>
<br>
<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Full Name</th>
      <th scope="col">Initials</th>
      <th scope="col">Designation</th>
      <th scope="col">IsActive?</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($teachers as $teacher)
<tr>@if ($teacher->Initials != " ")
  <td>{{ $teacher->Name }}</td>
  <td>{{ $teacher->Initials }}</td>
  <td>{{ $teacher->Designations }}</td>
  <td>{{ $teacher->IsActive }}</td>
  @endif
</tr>
 @endforeach
 </tbody>
</table>

</div>
@endsection