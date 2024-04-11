<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\category\CategoryManagerController;
use App\Http\Controllers\Admin\course\AddCourseController;
use App\Http\Controllers\Admin\course\CorseManagerController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\Community\CommunityController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\GoogleAuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Complaint\ComplaintController;
use App\Http\Controllers\Courses\CategoryController;
use App\Http\Controllers\Courses\CorseController;
use App\Http\Controllers\Courses\CourseDetailsController;
use App\Http\Controllers\Courses\CoursesListController;

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
    return view('welcome');
});

// Auth routes
Route::resource('/register' , RegisterController::class);
Route::resource('login', LoginController::class)->only(['index', 'store']);
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');
Route::resource('/forget-password', ForgotPasswordController::class)->only('index');
Route::get('/auth/google', [GoogleAuthController::class, 'redirectToGoogle'])->name('google.redirect');
Route::get('/auth/google/callback', [GoogleAuthController::class, 'handleGoogleCallback'])->name('google.callback');


// category routes
Route::resource('/courses/category', CorseController::class)->only('index');



// courses list  routes
Route::resource('/courses/course/course_list', CoursesListController::class)->only('index');
Route::resource('/courses/course/course_details', CourseDetailsController::class)->only('index');



// dashborad admin routes
Route::resource('/admin', AdminController::class)->only('index');

Route::resource('/admin/category/categoriesManager', CategoryManagerController::class)->only('index','store','edit','update','destroy');

Route::resource('/admin/course/coursesManager', CorseManagerController::class)->only('index','store','edit','update','destroy');
Route::resource('/admin/course/addCourse', AddCourseController::class)->only('index','store','edit','update','destroy');

// complaint
Route::resource('/complaint', ComplaintController::class)->only('index','store');

//community
Route::resource('/community', CommunityController::class)->only('index','store');
Route::resource('/posts', \App\Http\Controllers\Community\PostController::class)->only('store');
Route::resource('/asks', \App\Http\Controllers\Community\AskController::class)->only('store');




Route::resource('/client', ClientController::class)->only(['index', 'show']);





