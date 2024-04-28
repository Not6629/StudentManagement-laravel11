<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReportController;

//student
Route::prefix('students')->group(function()
{
    Route::get('/index',[StudentController::class,'index'])->name('indexstudents');
    Route::get('/new',[StudentController::class,'create'])->name('createstudents');
    Route::post('/new.',[StudentController::class,'store'])->name('storestudents');
    Route::get('/show/{id}',[StudentController::class,'show'])->name('showstudents');
    Route::get('/edit/{id}',[StudentController::class,'edit'])->name('editstudents');
    Route::post('/update/{id}',[StudentController::class,'update'])->name('updatestudents');
    Route::get('/delete/{id}',[StudentController::class,'destroy'])->name('deletestudents');
});

Route::prefix('teachers')->group(function()
{
    Route::get('/index',[TeacherController::class,'index'])->name('indexteachers');
    Route::get('/new',[TeacherController::class,'create'])->name('createteachers');
    Route::post('/new.',[TeacherController::class,'store'])->name('storeteachers');
    Route::get('/show/{id}',[TeacherController::class,'show'])->name('showteachers');
    Route::get('/edit/{id}',[TeacherController::class,'edit'])->name('editteachers');
    Route::post('/update/{id}',[TeacherController::class,'update'])->name('updateteachers');
    Route::get('/delete/{id}',[TeacherController::class,'destroy'])->name('deleteteachers');
});

Route::prefix('courses')->group(function()
{
    Route::get('/index',[courseController::class,'index'])->name('indexcourses');
    Route::get('/new',[courseController::class,'create'])->name('createcourses');
    Route::post('/new.',[courseController::class,'store'])->name('storecourses');
    Route::get('/show/{id}',[courseController::class,'show'])->name('showcourses');
    Route::get('/edit/{id}',[courseController::class,'edit'])->name('editcourses');
    Route::post('/update/{id}',[courseController::class,'update'])->name('updatecourses');
    Route::get('/delete/{id}',[courseController::class,'destroy'])->name('deletecourses');
});

Route::prefix('batches')->group(function()
{
    Route::get('/index',[batchController::class,'index'])->name('indexbatches');
    Route::get('/new',[batchController::class,'create'])->name('createbatches');
    Route::post('/new.',[batchController::class,'store'])->name('storebatches');
    Route::get('/show/{id}',[batchController::class,'show'])->name('showbatches');
    Route::get('/edit/{id}',[batchController::class,'edit'])->name('editbatches');
    Route::post('/update/{id}',[batchController::class,'update'])->name('updatebatches');
    Route::get('/delete/{id}',[batchController::class,'destroy'])->name('deletebatches');
});

Route::prefix('enrollments')->group(function()
{
    Route::get('/index',[enrollmentController::class,'index'])->name('indexenrollments');
    Route::get('/new',[enrollmentController::class,'create'])->name('createenrollments');
    Route::post('/new.',[enrollmentController::class,'store'])->name('storeenrollments');
    Route::get('/show/{id}',[enrollmentController::class,'show'])->name('showenrollments');
    Route::get('/edit/{id}',[enrollmentController::class,'edit'])->name('editenrollments');
    Route::post('/update/{id}',[enrollmentController::class,'update'])->name('updateenrollments');
    Route::get('/delete/{id}',[enrollmentController::class,'destroy'])->name('deleteenrollments');
});

Route::prefix('payments')->group(function()
{
    Route::get('/index',[paymentController::class,'index'])->name('indexpayments');
    Route::get('/new',[paymentController::class,'create'])->name('createpayments');
    Route::post('/new.',[paymentController::class,'store'])->name('storepayments');
    Route::get('/show/{id}',[paymentController::class,'show'])->name('showpayments');
    Route::get('/edit/{id}',[paymentController::class,'edit'])->name('editpayments');
    Route::post('/update/{id}',[paymentController::class,'update'])->name('updatepayments');
    Route::get('/delete/{id}',[paymentController::class,'destroy'])->name('deletepayments');
    Route::get('/print{id}payment',[ReportController::class,'print'])->name('printreports');
});

Route::fallback(function(){
    return view('error');
});

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');
    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});
