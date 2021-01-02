<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class assignTeacherController extends Controller
{
    public function index(){
        $items = DB::select('select * from added_courses, offered_course where offered_course.IsOffered = "Offered" and added_courses.id = offered_course.OfferedCourseId');
        return view('Phase 3.assignTeacher',['items'=>$items]);
    }
    public function create(){
        $items = DB::select('select * from added_courses, offered_course where offered_course.IsOffered = "Offered" and added_courses.id = offered_course.OfferedCourseId');
        return view('Phase 3.assignTeacher',['items'=>$items]);
    }

    public function store(Request $request)
    {
        $assigned_teacher = $request->input('assigned_teacher');
        $assigned_load = $request->input('assigned_load');

        DB::insert('insert into assign_teachers (CourseCode, CourseTitle, Dept, Sem) values(?, ?,)',[$assigned_teacher, $assigned_load]);

        return  redirect('/assignTeacher') -> with('success', 'Data Added');
    }
}
