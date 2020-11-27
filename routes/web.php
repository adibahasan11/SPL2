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

Route::get('/HomePage', function () {
    return view('HomePage');
});

Auth::routes();

Route::get('/Login', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/auth/passwords/reset', function () {
    return view('auth/passwords/reset');
});

Route::get('/Phase1/AddCourses', function () {
    return view('Phase1/AddCourses');
});
Route::get('/Phase1/AddTeacher', function () {
    return view('Phase1/AddTeacher');
});
