<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\AddTeacher;

class AddTeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = DB::select('select * from add_teachers');
        return view('Phase1.AddTeacher',['teachers'=>$teachers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teachers = DB::select('select * from add_teachers');
        return view('Phase1.TeacherList',['teachers'=>$teachers]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Name = $request->input('Name');
        $Initials = $request->input('Initials');
        $Designation = $request->input('Designation');
        $IsActive = $request->input('IsActive');

        DB::insert('insert into add_teachers(Name, Initials, Designation, IsActive) values(?, ?, ?, ?)',[$Name, $Initials, $Designation, $IsActive]);

        return  redirect('/addteacher') -> with('success', 'Data Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teachers = DB::select('SELECT * FROM add_teachers WHERE id = ?',[$id]);
        return view('Phase1.UpdateTeacher',['teachers'=>$teachers]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $Name = $request->input('Name');
        $Initials = $request->input('Initials');
        $Designation = $request->input('Designation');
        $IsActive = $request->input('IsActive');

        DB::update('UPDATE add_teachers 
            SET Name=?, Initials=?, Designation=?, IsActive=? 
            WHERE id = ?',[$Name, $Initials, $Designation, $IsActive, $id]);
        return redirect('/addteacher')->with('message' ,'Record updated successfully.');
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
        //
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
