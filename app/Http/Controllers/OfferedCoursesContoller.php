<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\OfferedCourses;

class OfferedCoursesContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = DB::select('select * from added_courses, offered_course where added_courses.id = offered_course.OfferedCourseId');
        return view('Phase2.OfferedCourses',['courses'=>$courses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = DB::select('select * from added_courses, offered_course where offered_course.IsOffered = "Offered" and added_courses.id = offered_course.OfferedCourseId');
        return view('Phase2.OfferedCourseList',['courses'=>$courses]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $courses = DB::select('SELECT * 
                                FROM added_courses, offered_course 
                                WHERE added_courses.id = offered_course.OfferedCourseId
                                AND added_courses.id = ?',[$id]);

        return view('Phase2.OfferingCourse',['courses'=>$courses]);
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
    public function update(Request $request, $id)
    {
        $IsOffered = $request->input('IsOffered');
        $No_of_Sec = $request->input('No_of_Sec');
        $No_of_Teachers = $request->input('No_of_Teachers');
        $Load = $request->input('Load');

        DB::update('UPDATE offer_course 
        SET IsOffered = ?, No_of_Sec=?, No_of_Teachers=?, Load=? 
        WHERE id = ?',[$IsOffered, $No_of_Sec, $No_of_Teachers, $Load, $OfferedCourseId]);
        return  redirect('/offercourse') -> with('success', 'Course Offered');
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
