<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('LogIn');
});
Route::get('/logout', function () {
    Auth::logout();
    return Redirect::to('login');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/phaseOneView',function (){
    return view('PhaseViews.PhaseOneView');
});
Route::get('/phaseTwoView',function (){
    return view('PhaseViews.PhaseTwoView');
});
Route::get('/phaseThreeView',function (){
    return view('PhaseViews.PhaseThreeView');
});

Route::get('/phaseOneReports',function (){
    return view('PhaseReportViews.PhaseOneReports');
});

Route::get('/phaseTwoReports',function (){
    return view('PhaseReportViews.PhaseTwoReports');
});

Route::get('/phaseThreeReports',function (){
    return view('PhaseReportViews.PhaseThreeReports');
});

//Route::resource('Phase1', 'AddCoursesController');

Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('addcourse','App\Http\Controllers\AddCoursesController@create');
Route::post('create','App\Http\Controllers\AddCoursesController@store');

Route::get('edit/{id}','App\Http\Controllers\AddCoursesController@show');
Route::post('edit/{id}','App\Http\Controllers\AddCoursesController@edit');

Route::get('CourseList','App\Http\Controllers\AddCoursesController@index');
Route::get('/CourseListpdf','App\Http\Controllers\AddCoursesController@downloadPdf');

Route::get('addteacher','App\Http\Controllers\AddTeacherController@index');
Route::post('createteacher','App\Http\Controllers\AddTeacherController@store');

Route::get('editTeacher/{Initials}','App\Http\Controllers\AddTeacherController@show');
Route::post('editTeacher/{Initials}','App\Http\Controllers\AddTeacherController@edit');

Route::get('TeacherList','App\Http\Controllers\AddTeacherController@create');
Route::get('/Teacherpdf','App\Http\Controllers\AddTeacherController@downloadPdf');

Route::get('offeredcourses','App\Http\Controllers\OfferedCoursesContoller@index');

Route::get('OfferedCourseList','App\Http\Controllers\OfferedCoursesContoller@create');
Route::get('/offeredpdf','App\Http\Controllers\OfferedCoursesContoller@downloadPDF');

Route::get('OfferingCourse/{id}','App\Http\Controllers\OfferedCoursesContoller@show');
Route::post('OfferingCourse/{id}','App\Http\Controllers\OfferedCoursesContoller@update');

Route::get('facultyRequirement','App\Http\Controllers\AddTeacherController@showCalculations');
Route::get('/facultyRequirementPDF','App\Http\Controllers\AddTeacherController@getFacultyRequirementPDF');
Route::get('SummaryCourseLoad','App\Http\Controllers\OfferedCoursesContoller@summaryOfCourseLoad');
Route::get('/SummeryCoursePDF','App\Http\Controllers\OfferedCoursesContoller@downloadSummaryOfCourseLoad');

Route::get('AssignTeacher/{id}','App\Http\Controllers\AssignTeacherController@pageView');
Route::post('AssignTeacher/{id}','App\Http\Controllers\AssignTeacherController@store');

Route::get('editAssignTeacher/{id}','App\Http\Controllers\AssignTeacherController@show');
Route::post('editAssignTeacher/{id}','App\Http\Controllers\AssignTeacherController@update');

Route::get('ViewAssignTeacher','App\Http\Controllers\AssignTeacherController@index');

Route::get('TeacherWiseReport','App\Http\Controllers\AssignTeacherController@viewTeacherWiseReport');
Route::get('/TeacherWiseReportPDF','App\Http\Controllers\AssignTeacherController@getTeacherWiseReportPDF');

Route::get('SemesterWiseReport','App\Http\Controllers\AssignTeacherController@viewSemesterWiseReport');
Route::get('/SemesterWiseReportPDF','App\Http\Controllers\AssignTeacherController@getSemesterWiseReportPDF');

