<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\EnrollmentController;

Route::get('/',[StudentController::class,'index'])->name('indexstudents');
Route::get('/newstudents',[StudentController::class,'create'])->name('createstudents');
Route::post('/new.students',[StudentController::class,'store'])->name('storestudents');
Route::get('/showstudent/{id}',[StudentController::class,'show'])->name('showstudents');
Route::get('/editstudent/{id}',[StudentController::class,'edit'])->name('editstudents');
Route::post('/updatestudent/{id}',[StudentController::class,'update'])->name('updatestudents');
Route::get('/deletestudent/{id}',[StudentController::class,'destroy'])->name('deletestudents');

Route::get('/teachers',[TeacherController::class,'index'])->name('indexteachers');
Route::get('/newteachers',[TeacherController::class,'create'])->name('createteachers');
Route::post('/new.teachers',[TeacherController::class,'store'])->name('storeteachers');
Route::get('/showteacher/{id}',[TeacherController::class,'show'])->name('showteachers');
Route::get('/editteacher/{id}',[TeacherController::class,'edit'])->name('editteachers');
Route::post('/updateteacher/{id}',[TeacherController::class,'update'])->name('updateteachers');
Route::get('/deleteteacher/{id}',[TeacherController::class,'destroy'])->name('deleteteachers');

Route::get('/courses',[CourseController::class,'index'])->name('indexcourses');
Route::get('/newcourses',[CourseController::class,'create'])->name('createcourses');
Route::post('/new.courses',[CourseController::class,'store'])->name('storecourses');
Route::get('/showcourse/{id}',[CourseController::class,'show'])->name('showcourses');
Route::get('/editcourse/{id}',[CourseController::class,'edit'])->name('editcourses');
Route::post('/updatecourse/{id}',[CourseController::class,'update'])->name('updatecourses');
Route::get('/deletecourse/{id}',[CourseController::class,'destroy'])->name('deletecourses');

Route::get('/batches',[BatchController::class,'index'])->name('indexbatches');
Route::get('/newbatches',[BatchController::class,'create'])->name('createbatches');
Route::post('/new.batches',[BatchController::class,'store'])->name('storebatches');
Route::get('/showbatch/{id}',[BatchController::class,'show'])->name('showbatches');
Route::get('/editbatch/{id}',[BatchController::class,'edit'])->name('editbatches');
Route::post('/updatebatch/{id}',[BatchController::class,'update'])->name('updatebatches');
Route::get('/deletebatch/{id}',[BatchController::class,'destroy'])->name('deletebatches');

Route::get('/enrollments',[EnrollmentController::class,'index'])->name('indexenrollments');
Route::get('/newenrollments',[EnrollmentController::class,'create'])->name('createenrollments');
Route::post('/new.enrollments',[EnrollmentController::class,'store'])->name('storeenrollments');
Route::get('/showenrollment/{id}',[EnrollmentController::class,'show'])->name('showenrollments');
Route::get('/editenrollment/{id}',[EnrollmentController::class,'edit'])->name('editenrollments');
Route::post('/updateenrollment/{id}',[EnrollmentController::class,'update'])->name('updateenrollments');
Route::get('/deleteenrollment/{id}',[EnrollmentController::class,'destroy'])->name('deleteenrollments');