<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Models\AddedCourses;

class AddCoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Phase1.AddCourses');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this-> validate($request, [
            'CourseCode' => 'required',
            'CourseTitle'=> 'required',
            'Dept'=> 'required',
            'Sem' => 'required',
            'CourseType' => 'required',
            'Comp_Mand' => 'required',
            'Credit' => 'required',
            'ContactHour' => 'required',
            'E_ContactHour' => 'required'
        ]);

        $addCourse = new AddedCourses([
            'CourseCode' => $request->get('CourseCode'),
            'CourseTitle' => $request->get('CourseTitle'),
            'Dept'  => $request->get('Dept'),
            'Sem' => $request->get('Sem'),
            'CourseType' => $request->get('CourseType'),
            'Comp_Mand' => $request->get('Comp_Mand'),
            'Credit' => $request->get('Credit'),
            'ContactHour' => $request->get('ContactHour'),
            'E_ContactHour' => $request->get('E_ContactHour')
        ]);
        $addCourse -> save();
        return redirect()->route('/Phase1/AddCourses') -> with('success', 'Data Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
