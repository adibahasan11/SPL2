<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
<table class="table table-bordered">
    <thead>
    <tr>
        <td><b>Course Code</b></td>
        <td><b>Course Title</b></td>
        <td><b>Department</b></td>
        <td><b>Semester</b></td>
        <td><b>Course Type</b></td>
        <td><b>Credit</b></td>
        <td><b>Contact Hour</b></td>
    </tr>
    </thead>
    <tbody>
    @foreach ($courses as $course)
    <tr>
        <td>
            {{$course->CourseCode}}
        </td>
        <td>
            {{$course->CourseTitle}}
        </td>
        <td>
            {{$course->Dept}}
        </td>
        <td>
            {{$course->Sem}}
        </td>
        <td>
            {{$course->CourseType}}
        </td>
        <td>
            {{$course->Credit}}
        </td>
        <td>
            {{$course->ContactHour}}
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
