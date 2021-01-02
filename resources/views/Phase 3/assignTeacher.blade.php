@extends('Layouts.ReportsLayout')
@section('content')
    <table class="table table-hover">
        <thead class="p1">
        <thead class="p1">
        <th scope="col">Course Code</th>
        <th scope="col">Course Title</th>
        <th scope="col">Semester</th>
        <th scope="col">Credit</th>
        <th scope="col">Contact Hour</th>
        <th scope="col">Effective Contact Hour</th>
        <th scope="col">Offering Department</th>
        <th scope="col">Number of Sections</th>
        <th scope="col">Number of Faculties</th>
        <th scope="col">Assigned Teachers</th>
        <th scope="col">Assign Load</th>
        <th scope="col"></th>
        </tr>
        </thead>

        @foreach($items as $item)
            <tr>
                <td>{{ $item->CourseCode }}</td>
                <td>{{ $item->CourseTitle }}</td>
                <td>{{ $item->Sem }}</td>
                <td>{{ $item->Credit }}</td>
                <td>{{ $item->ContactHour }}</td>
                <td>{{ $item->E_ContactHour }}</td>
                <td>{{ $item->Dept }}</td>
                <td>{{ $item->No_of_Sec }}</td>
                <td>{{ $item->No_of_Teachers }}</td>
                <td><div class="form-group"><input type="text" class="form-control" id="inputDefault" name="AssignTeacher" required></div></td>
                <td><div class="form-group"><input type="text" class="form-control" id="inputDefault" name="AssignLoad" required></div></td>
                <td><div class="form-group">
                        <button class="btn btn-primary btn-edit" onclick = "edit()" id="edit"> Submit </button></div></td>
                @endforeach
            </tr>
    </table>
@endsection
