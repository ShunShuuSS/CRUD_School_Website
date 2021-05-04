<?php

use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\StudentController;
use App\http\Controllers\TeacherController;
use App\Http\Controllers\TestApiController;
use App\Http\Controllers\UserController;
use App\Models\User;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [StudentController::class, 'index']);
Route::get('/students', [StudentController::class, 'student_view']);
Route::get('/students/createstudent',[StudentController::class, 'create_student_view']);
Route::post('/students/createstudent/create',[StudentController::class, 'create_student_post']);
Route::get('/students/editstudent/{id}',[StudentController::class, 'edit_student_view']);
Route::post('/students/editstudent/edit/{id}', [StudentController::class, 'edit_student_post']);
Route::get('/students/deletestudent/{id}', [StudentController::class, 'delete_student']);

Route::get('/teachers', [TeacherController::class, 'teacher_view']);
Route::get('/createdataview', [TeacherController::class, 'create_teacher_view']);
Route::post('/createdata', [TeacherController::class, 'create_teacher']);
Route::get('/teachers/edit/view/{id}', [TeacherController::class, 'edit_teacher_view']);
Route::post('/teachers/edit/edit/{id}', [TeacherController::class, 'edit_teacher']);
Route::get('/teachers/delete/{id}', [TeacherController::class, 'delete_teacher']);

Route::get('/classrooms', [ClassroomController::class, 'classroom_view']);
Route::get('/classrooms/createclassroom',[ClassroomController::class, 'create_classroom_view']);
Route::post('/classrooms/createclassroom/create',[ClassroomController::class, 'create_classroom_post']);
Route::get('classrooms/editclassroom/{id}',[ClassroomController::class, 'edit_classroom_view']);
Route::post('classrooms/editclassroom/edit/{id}', [ClassroomController::class, 'edit_classroom_post']);
Route::get('classrooms/deleteclassroom/{id}', [ClassroomController::class, 'delete_classroom']);

Route::get('/users', [UserController::class, 'user_view']);
Route::get('/users/login', [UserController::class, 'user_login_view']);
Route::post('/users/login/post', [UserController::class, 'user_login_post']);
Route::get('/users/register',[UserController::class, 'user_register_view']);
Route::post('/users/registeruser',[UserController::class, 'user_register_post']);
Route::get('/users/edit',[UserController::class, 'user_edit_view']);
Route::post('/users/edituser',[UserController::class, 'user_edit_post']);
Route::get('/users/delete',[UserController::class, 'user_delete_view']);
Route::post('/users/deleteuser',[UserController::class, 'user_delete_post']);