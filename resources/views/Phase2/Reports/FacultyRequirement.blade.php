@extends('Layouts.ReportsLayout')

@section('content')
@php ($i = 0)
@php ($result = 0)

@foreach ($sumOfLoads as $sumOfLoad)
@php($result = $result + $sumOfLoad->Loads)
@endforeach
<div class = "table-holder">
<div  align="right">
        <a href="{{url('/facultyRequirementPDF')}}" class="btn btn-outline-danger btn-sm">Get PDF report</a>
</div><br>
<table class="table table-hover table-bordered">
  <thead class="p1">
    <tr>
      <th scope="col">Designation</th>
      <th scope="col">Offered Load</th>
      <th scope="col">Number of Available Teachers</th>
      <th scope="col">Total Load</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($teachers as $teacher)
<tr>
  <td>{{ $teacher->Designation }}</td>
  <td>{{ $teacher->Loads }}</td>

  @if($teacher->Designation === 'Professor')
  <td>{{ $Professor }}</td>
  <td>{{ $teacher->Loads*$Professor }}</td>
  @php($i = $i + $teacher->Loads*$Professor)

  @elseif($teacher->Designation === 'Associate Professor')
  <td>{{ $AscProfessor }}</td>
  <td>{{  $teacher->Loads*$AscProfessor }}</td>
  @php($i = $i + $teacher->Loads*$AscProfessor)

  @elseif($teacher->Designation === 'Assistant Professor')
  <td>{{ $AstProfessor }}</td>
  <td>{{  $teacher->Loads*$AstProfessor }}</td>
  @php($i = $i + $teacher->Loads*$AstProfessor)

  @elseif($teacher->Designation === 'Lecturer')
  <td>{{ $Lecturer }}</td>
  <td>{{  $teacher->Loads*$Lecturer }}</td>
  @php($i = $i + $teacher->Loads*$Lecturer)

@endif
</tr>
 @endforeach
 <tr>
    <th>Total Capacity</th>
    <td></td>
    <th>{{$Professor + $AscProfessor + $AstProfessor + $Lecturer}}</th>
    <th>{{$i}}</th>
 </tr>
 <tr>
    <th>Total Load for Internal Teachers</th>
    <td></td>
    <td></td>
    <th>{{ $result }}</th>
 </tr>
 <tr>
    <th>Deficit</th>
    <td></td>
    <td></td>
    <th>{{ $result - $i }}</th>
 </tr>
 </tbody>
 <thead class="p2">
    <tr> 
      <th scope="col" colspan = 6 class= "heading"><b>Required Faculties</b></th>
    </tr>
  </thead>
  <thead class="p1">
    <tr>
      <th scope="col">Designation</th>
      <th scope="col">Offered Load</th>
      <th scope="col">Number of Required Teachers</th>
      <th scope="col">Total Load</th>
    </tr>
  </thead>
  <tbody>
  <tr>
    <td>Lecturer</td>
    <td>{{ $teachers[3]->Loads }}</td>
    @if ( $result - $i < 0 )  
        <td>0</td>
        <td>0</td>
    @else 
        <td>{{ ceil(($result - $i)/$teachers[3]->Loads) }}</td>
        <td>{{ $teachers[3]->Loads*ceil(($result - $i)/$teachers[3]->Loads) }}</td>
    @endif
 </tr>
 <tr>
    <td>Total Capacity</td>
    <td></td>
    <td></td>
    @if ( $result - $i < 0 )  
        <td>0</td>
    @else 
        <td>{{ $teachers[3]->Loads*ceil(($result - $i)/$teachers[3]->Loads) }}</td>
    @endif
 </tr>
 <tr>
    <td>Deficit After Recruitment</td>
    <td></td>
    <td></td>
    @if ( $result - $i < 0 )  
        <td>0</td>
    @else 
        <td>{{ ($result - $i) - ($teachers[3]->Loads*ceil(($result - $i)/$teachers[3]->Loads)) }}</td>
    @endif
 </tr>
  </tbody>
</table>
</div>
@endsection