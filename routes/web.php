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

Route::get('logout', '\app\Http\Controllers\Auth\LoginController@logout');

Route::get('/Phase1/AddCourses', function () {
    return view('Phase1/AddCourses');
});

Route::get('/Phase1/AddTeacher', function () {
    return view('Phase1/AddTeacher');
});
Route::get('/Phase1/CourseList', function () {
    return view('Phase1/CourseList');
});
