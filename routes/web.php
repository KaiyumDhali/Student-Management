<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TeacherAuthController;
use App\Http\Controllers\TeacherDashboardController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AdminManageController;
use App\Http\Controllers\EnrollController;


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

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/about-us', [HomeController::class,'about'])->name('about');
Route::get('/all-courses', [HomeController::class,'courses'])->name('courses');
Route::get('/contact-us', [HomeController::class,'contact'])->name('contact');
Route::get('/login-registration', [HomeController::class,'auth'])->name('login-registration');
Route::get('/course-details/{id}', [HomeController::class,'details'])->name('details.course');


Route::get('/enroll-now/{id}', [EnrollController::class,'index'])->name('enroll-now');
Route::post('/new-enroll/{id}', [EnrollController::class,'enrol'])->name('enroll.new');


Route::get('/teacher/login', [TeacherAuthController::class,'login'])->name('teacher.login');
Route::post('/teacher/login', [TeacherAuthController::class,'loginCheck'])->name('teacher.login');
Route::post('/teacher/logout', [TeacherAuthController::class,'logout'])->name('teacher.logout');
Route::get('/teacher/dashboard', [TeacherDashboardController::class,'index'])->name('teacher.dashboard');




Route::get('/course/add', [CourseController::class,'index'])->name('course.add');
Route::post('course/add',[CourseController::class,'insert'])->name('course.insert');
Route::get('/course/manage', [CourseController::class,'manage'])->name('course.manage');
Route::get('/course/edit/{id}',[CourseController::class,'edit'])->name('course.edit');
Route::post('/course/update/{id}',[CourseController::class,'update'])->name('course.update');
Route::get('/course/details/{id}',[CourseController::class,'details'])->name('course.details');
Route::get('/course/delete/{id}',[CourseController::class,'delete'])->name('course.delete');



Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::get('teacher/add',[TeacherController::class,'index'])->name('teacher.add');
    Route::post('teacher/add',[TeacherController::class,'insert'])->name('teacher.insert');
    Route::get('teacher/manage',[TeacherController::class,'manage'])->name('teacher.manage');
    Route::get('teacher/edit/{id}',[TeacherController::class,'edit'])->name('teacher.TeacherUpdate');
    Route::post('teacher/update/{id}',[TeacherController::class,'update'])->name('teacher.update');
    Route::get('teacher/delete/{id}',[TeacherDashboardController::class,'delete'])->name('teacher.delete');


    Route::get('admin/manage-course',[AdminManageController::class,'manageCourse'])->name('admin.manage-course');
    Route::get('admin/course-details/{id}',[AdminManageController::class,'detailsCourse'])->name('admin.course.details');
    Route::get('admin/update-course-status/{id}',[AdminManageController::class,'updateStatus'])->name('admin.update.course.status');
    Route::get('admin/manage-course-offer',[AdminManageController::class,'manageCourseOffer'])->name('admin.manage-course-offer');
    Route::post('admin/manage-course-offer-create',[AdminManageController::class,'createCourseOffer'])->name('admin.create-course-offer');
    Route::get('admin/edit-course-offer/{id}',[AdminManageController::class,'courseOfferEdit'])->name('admin.course-offer-edit');
    Route::post('admin/update-course-offer',[AdminManageController::class,'courseOfferUpdate'])->name('admin.course-offer-Update');


});
