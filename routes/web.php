<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

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

Route::get('/client/dashboard', function () {
    return 'Client Dashboard';
})->name('client.dashboard');

Route::get('/expert/dashboard', function () {
    return 'Expert Dashboard';
})->name('expert.dashboard');

Route::get('/superadmin/dashboard', function () {
    return 'SuperAdmin Dashboard';
})->name('superadmin.dashboard');