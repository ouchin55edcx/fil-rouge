<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Client\DashboardController as ClientDashboardController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CourseDetailsController;
use App\Http\Controllers\CourseListController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\Expert\DashboardController;
use App\Http\Controllers\ExpertController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
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

// Registration Routes
Route::resource('register', RegisterController::class)->only(['index', 'store']); 



// Login Routes
Route::resource('login', LoginController::class)->only(['index', 'store']);
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');



Route::resource('/client', ClientController::class)->only(['index', 'show']);

Route::resource('/expert', ExpertController::class)->only(['index', 'show']);

Route::resource('/courses', CoursesController::class)->only(['index']);

Route::resource('/courses/course_list', CourseListController::class)->only(['index']);
Route::resource('/courses/course_details', CourseDetailsController::class)->only(['index']);

Route::resource('/admin', AdminController::class)->only(['index', 'show']);

