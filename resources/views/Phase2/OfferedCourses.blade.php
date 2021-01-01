@extends('Phase1.Phase1Layout')

@section('content')

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

<form action = "/offercourse" method = "post">
	@csrf
<table class="table table-hover">
  <thead class="p1">
    <tr>
      <th scope="col">Course Code</th>
      <th scope="col">Course Title</th>
      <th scope="col">Semester</th>
      <!--<th scope="col">Offer Course?</th>
      <th scope="col">Number of Sections</th>
      <th scope="col">Number of Teachers</th>
      <th scope="col">Load</th>-->
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @foreach ($courses as $course)
<tr>
  <td>{{ $course->CourseCode }}</td>
  <td>{{ $course->CourseTitle }}</td>
  <td>{{ $course->Sem }}</td>

  <!--<td><div class="form-group c-box"><input type="checkbox" class= "teacher-checkbox" id="IsActive" name="IsOffered" value="Offered"></div></td>
  <td><div class="form-group"><input type="text" class="form-control" id="inputDefault" name="No_of_Sec" required></div></td>
  <td><div class="form-group"><input type="text" class="form-control" id="inputDefault" name="No_of_Teachers" required></div></td>
  <td><div class="form-group"><input type="text" class="form-control" id="inputDefault" name="Load" value= {{ $course->ContactHour }} required></div></td>-->
  
  <td><div class="form-group"><a class="btn btn-primary btn-edit" id="edit" href ='OfferingCourse/{{ $course->id }}'> Offer </a></div></td>
</tr>
 @endforeach
    </form>

  </tbody>
</table>
</form>

@endsection