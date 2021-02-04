@extends('Layouts.ReportsLayout')

@section('content')

<h4 class = "summer"><b>Summer Semester</b></h4>
<h4 class = "summer"><b>Teacher-Wise Load Distribution</b></h4>

@foreach($teachers as $teacher)
@php ($theory = 0)
@php ($lab = 0)
<div class="table-holder">
<table class="table table-hover table-bordered">
  <thead class="thead-dark">
    <tr>
      <td colspan = 2><b>{{$teacher->Name}}</b></td>
      <td colspan = 2><b>Remaining Load = {{$teacher->Loads_remaining}}</b></td>
    </tr>
    <tr>
      <th scope="col">{{$teacher->Designations}}</th>
      <th scope="col"></th>
      <th scope="col">Theory</th>
      <th scope="col">Lab</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($courses as $course)
<tr>
    @if($course->Initials == $teacher->Initials)
    <td>{{ $course->CourseCode }}</td>
    <td>{{ $course->CourseTitle }}</td>

        @if($course->CourseType === 'Theory')
            <td>{{$course->Loads}}</td>
            <td></td>
            {{$theory = $theory + $course->Loads}}
        @elseif($course->CourseType === 'Lab')
            <td></td>
            <td>{{$course->Loads}}</td>
            {{$lab = $lab + $course->Loads}}
        @endif
    @endif
</tr>
    @endforeach
    <tr>
    <td><b>Total</b></td>
    <td></td>
    <td><b>{{ $theory }}</b></td>
    <td><b>{{ $lab }}</b></td>
    </tr>
  </tbody>
</table>
</div>
@endforeach
@endsection