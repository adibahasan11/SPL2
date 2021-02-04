@extends('Phase3.Phase3Layout')

@section('content')

@php ($a_teacher = 0)
@php ($i = 0)
@php ($id = 0)

@if (\Session:: has('success'))
<div class="alert alert-success">
  <p>{{\Session::get('success')}}</p>
</div> 
@endif

@if(Session::has('message'))
  <div class="alert alert-success" id="res_message">
  <p>{{ \Session::get('message') }}</p>
  </div>
@endif
<h4 class = "summer"><b>Summer Semester</b></h4>
	@csrf
  <h5 class = "summer"><b>Courses assigned with Teachers</b></h5>
  <table class="table table-hover">
  <thead class="p1">
    <tr><td></td><td></td>
      <th scope="col">Serial</th>
      <th scope="col">Course Code</th>
      <th scope="col">Course Title</th>
      <th scope="col">Department</th>
      <th scope="col">Semester</th>
      <th scope="col">Course Type</th>
      <th scope="col">Credit</th>
      <th scope="col">Effective Contact Hour</th>
      <th scope="col">Total Load</th>
      <th scope="col">Assign Teacher</th>
      <th scope="col">Assigned Load</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>  
  @foreach ($offeredcourses_assigned as $offeredcourse_assigned)
  <tr><td></td> <td></td>
  <td>{{ $offeredcourse_assigned->OfferedCourseId }}</td>
  <td>{{ $offeredcourse_assigned->CourseTitle }}</td>
  <td>{{ $offeredcourse_assigned->CourseCode }}</td>
  <td>{{ $offeredcourse_assigned->Dept }}</td>
  <td>{{ $offeredcourse_assigned->Sem }}</td>
  <td>{{ $offeredcourse_assigned->CourseType }}</td>
  <td>{{ $offeredcourse_assigned->Credit }}</td>
  <td>{{ $offeredcourse_assigned->E_ContactHour }}</td>
  <td>{{ $offeredcourse_assigned->Loads }}</td>
  <td>@foreach ($assignedteachers as $assignedteacher)
        @if ( $assignedteacher->OfferedCourseId == $offeredcourse_assigned->OfferedCourseId )
          <div>{{$assignedteacher->Initials}}</div>
        @endif
      @endforeach
  </td>
  <td>@foreach ($assignedteachers as $assignedteacher)
        @if ( $assignedteacher->OfferedCourseId == $offeredcourse_assigned->OfferedCourseId )
          <div>{{$assignedteacher->Loads}}</div>
        @endif
      @endforeach
  </td>
  <td><div class="form-group">
        <a class="btn btn-primary btn-edit" id="edit" href ='editAssignTeacher/{{ $offeredcourse_assigned->OfferedCourseId }}'> Edit </a></div></td>
  @endforeach
  </tbody>
</table>
@endsection