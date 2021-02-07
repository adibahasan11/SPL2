<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use PDF;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\AddTeachers;
use App\Models\AssignTeacher;

class assignTeacherController extends Controller
{
    public function pageView(){
        $offeredcourses = DB::select('select * from added_courses, offered_course where added_courses.id = offered_course.OfferedCourseId and offered_course.IsOffered = "Offered" and offered_course.isAssigned = 0 
                                       ');
        $offeredcourses_assigned = DB::select('select * from added_courses, offered_course where added_courses.id = offered_course.OfferedCourseId and offered_course.IsOffered = "Offered" and offered_course.isAssigned = 1 ');
        $assignedteachers = DB::select('select * from assign_teachers');
        $teachers = DB::select('select * from add_teachers where IsActive = "Yes" and Loads_remaining > 0');

        return view('Phase3.AssignTeacher')->with(array('offeredcourses'=>$offeredcourses, 'offeredcourses_assigned'=>$offeredcourses_assigned, 'assignedteachers'=>$assignedteachers, 'teachers'=>$teachers));
    }

    public function store(Request $request)
    {
        //$CourseId = $request->input('OfferedCourseId');
        foreach($request->Loads as $key => $v){
            $data = array ('OfferedCourseId'=> $request->OfferedCourseId,
                            'OfferedCourseCode' => $request->CourseCode,
                            'Initials' => $request->Initials[$key],
                            'Loads' => $request->Loads[$key] );
            AssignTeacher::insert($data);
        }
        return  redirect('/AssignTeacher')-> with('success', 'Data Added');
    }

    public function show($id)
    {
        $offered_course = DB::select('SELECT Loads FROM offered_course WHERE OfferedCourseId = ?',[$id]);
        $teachers = DB::select('SELECT * from add_teachers where IsActive = "Yes" and Loads_remaining > 0');
        $courses = DB::select('SELECT * FROM assign_teachers WHERE OfferedCourseId = ?',[$id]);
        return view('Phase3.AssigningTeacher')->with(array('offered_course'=>$offered_course, 'courses'=>$courses, 'teachers'=>$teachers));
    }

    public function update(Request $request, $OfferedCourseId)
    {
        foreach ($request->Initials as $key => $v){
            $data = array (
                'Initials' => $request->Initials[$key],
                'Loads' => $request->Loads[$key] );
            $a_teacher = AssignTeacher::where ('OfferedCourseId', $OfferedCourseId)->where('Initials', $request->Initials[$key]);
            $a_teacher->update($data);
        }
        return redirect('/ViewAssignTeacher')->with('message' ,'Record updated successfully.');
    }

    public function index()
    {
        $offeredcourses_assigned = DB::select('select * from added_courses, offered_course where added_courses.id = offered_course.OfferedCourseId and offered_course.IsOffered = "Offered" and offered_course.isAssigned = 1 ');
        $assignedteachers = DB::select('select * from assign_teachers');
        $teachers = DB::select('select * from add_teachers where IsActive = "Yes" and Loads_remaining > 0');

        return view('Phase3.ViewAssignTeacher')->with(array('offeredcourses_assigned'=>$offeredcourses_assigned, 'assignedteachers'=>$assignedteachers, 'teachers'=>$teachers));
    }
    public function viewTeacherWiseReport()
    {
        $teachers = DB::select('select * from add_teachers where isActive = "Yes"');
        $courses = DB::select('select * from added_courses a, assign_teachers at where a.id = at.OfferedCourseId');
        
        return view('Phase3.TeacherWiseCourseLoad')->with(array('courses'=>$courses, 'teachers'=>$teachers));
    }

    public function getTeacherWiseReportPDF()
    {
        $teachers = DB::select('select * from add_teachers where isActive = "Yes"');
        $courses = DB::select('select * from added_courses a, assign_teachers at where a.id = at.OfferedCourseId');
        
        $pdf = PDF::loadView('Phase3.ReportsPDF.TeacherWisePDF', compact(['teachers', 'courses']));
        
        return $pdf->download('Teacher-Wise Load Distribution.pdf');
    }

    public function viewSemesterWiseReport()
    {
        $courses = DB::select('select * 
                            from added_courses a, offered_course of
                            where a.id = of.OfferedCourseId
                            and of.isOffered = "Offered" and of.IsAssigned = "1"');
        $teachers = DB::select('select * 
                                from assign_teachers');
        return view('Phase3.SemesterWiseReport')->with(array('courses'=>$courses, 'teachers'=>$teachers));
    }

    public function getSemesterWiseReportPDF()
    {
        $courses = DB::select('select * 
                            from added_courses a, offered_course of
                            where a.id = of.OfferedCourseId
                            and of.isOffered = "Offered" and of.IsAssigned = "1"');
        $teachers = DB::select('select * 
                                from assign_teachers');
        
        $pdf = PDF::loadView('Phase3.ReportsPDF.SemesterWisePDF', compact(['teachers', 'courses']));
        
        return $pdf->download('Semester-Wise Load Distribution.pdf');
    }
}
