@extends('Phase2.Phase2Layout')

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
    <form action = "/assignTeacher" method = "post">
        @csrf
    <table class="table table-hover">
        <thead class="p1">
        <tr>
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

        @foreach($items as $item,$teachers as $teacher)
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

                @foreach($teachers as $teacher )
                    <td>{{ $teacher->assigned_teacher }}</td>
                    <td>{{ $item->assigned_load }}</td>
                @endforeach
                <td><div class="form-group">
                        <button class="btn btn-primary btn-edit" onclick = "edit()" id="edit"> Submit </button></div></td>
                @endforeach
            </tr>
    </table>
    </form>
@endsection
