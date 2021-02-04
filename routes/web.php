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

//Route::resource('Phase1', 'AddCoursesController');

Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('addcourse','App\Http\Controllers\AddCoursesController@create');
Route::post('create','App\Http\Controllers\AddCoursesController@store');

Route::get('edit/{id}','App\Http\Controllers\AddCoursesController@show');
Route::post('edit/{id}','App\Http\Controllers\AddCoursesController@edit');

Route::get('CourseList','App\Http\Controllers\AddCoursesController@index');

Route::get('addteacher','App\Http\Controllers\AddTeacherController@index');
Route::post('createteacher','App\Http\Controllers\AddTeacherController@store');

Route::get('editTeacher/{Initials}','App\Http\Controllers\AddTeacherController@show');
Route::post('editTeacher/{Initials}','App\Http\Controllers\AddTeacherController@edit');

Route::get('TeacherList','App\Http\Controllers\AddTeacherController@create');

Route::get('offeredcourses','App\Http\Controllers\OfferedCoursesContoller@index');

Route::get('OfferedCourseList','App\Http\Controllers\OfferedCoursesContoller@create');

Route::get('OfferingCourse/{id}','App\Http\Controllers\OfferedCoursesContoller@show');
Route::post('OfferingCourse/{id}','App\Http\Controllers\OfferedCoursesContoller@update');

Route::get('facultyRequirement','App\Http\Controllers\AddTeacherController@showCalculations');
Route::get('SummaryCourseLoad','App\Http\Controllers\OfferedCoursesContoller@summaryOfCourseLoad');

Route::get('AssignTeacher','App\Http\Controllers\AssignTeacherController@pageView');
Route::post('AssignTeacher','App\Http\Controllers\AssignTeacherController@store');

Route::get('editAssignTeacher/{id}','App\Http\Controllers\AssignTeacherController@show');
Route::post('editAssignTeacher/{id}','App\Http\Controllers\AssignTeacherController@update');

Route::get('ViewAssignTeacher','App\Http\Controllers\AssignTeacherController@index');
Route::get('TeacherWiseReport','App\Http\Controllers\AssignTeacherController@viewTeacherWiseReport');

