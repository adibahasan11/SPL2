<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\AddTeachers;
use App\Models\AssignTeacher;

class AssignTeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offeredcourses_assigned = DB::select('select * from added_courses, offered_course where added_courses.id = offered_course.OfferedCourseId and offered_course.IsOffered = "Offered" and offered_course.isAssigned = 1 ');
        $assignedteachers = DB::select('select * from assign_teachers');
        $teachers = DB::select('select * from add_teachers where IsActive = "Yes" and Loads_remaining > 0');

        return view('Phase3.ViewAssignTeacher')->with(array('offeredcourses_assigned'=>$offeredcourses_assigned, 'assignedteachers'=>$assignedteachers, 'teachers'=>$teachers));
    }
    public function pageView()
    {
        $offeredcourses = DB::select('select * from added_courses, offered_course where added_courses.id = offered_course.OfferedCourseId and offered_course.IsOffered = "Offered" and offered_course.isAssigned = 0 ');
        $offeredcourses_assigned = DB::select('select * from added_courses, offered_course where added_courses.id = offered_course.OfferedCourseId and offered_course.IsOffered = "Offered" and offered_course.isAssigned = 1 ');
        $assignedteachers = DB::select('select * from assign_teachers');
        $teachers = DB::select('select * from add_teachers where IsActive = "Yes" and Loads_remaining > 0');

        return view('Phase3.AssignTeacher')->with(array('offeredcourses'=>$offeredcourses, 'offeredcourses_assigned'=>$offeredcourses_assigned, 'assignedteachers'=>$assignedteachers, 'teachers'=>$teachers));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function viewTeacherWiseReport()
    {
        $teachers = DB::select('select * from add_teachers where isActive = "Yes"');
        $courses = DB::select('select * from added_courses a, assign_teachers at where a.id = at.OfferedCourseId');
        
        return view('Phase3.TeacherWiseCourseLoad')->with(array('courses'=>$courses, 'teachers'=>$teachers));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $offered_course = DB::select('SELECT Loads FROM offered_course WHERE OfferedCourseId = ?',[$id]);
        $teachers = DB::select('SELECT * from add_teachers where IsActive = "Yes" and Loads_remaining > 0');
        $courses = DB::select('SELECT * FROM assign_teachers WHERE OfferedCourseId = ?',[$id]);
        return view('Phase3.AssigningTeacher')->with(array('offered_course'=>$offered_course, 'courses'=>$courses, 'teachers'=>$teachers));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $OfferedCourseId)
    {
        foreach ($request->Initials as $key => $v){
            $data = array (
                'Initials' => $request->Initials[$key],
                'Loads' => $request->Loads[$key] );
            $a_teacher = AssignTeacher::where ('OfferedCourseId', $OfferedCourseId)->where('Initials', $request->Initials[$key]);
            $a_teacher->update($data);
        }
        return redirect('/AssignTeacher')->with('message' ,'Record updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
