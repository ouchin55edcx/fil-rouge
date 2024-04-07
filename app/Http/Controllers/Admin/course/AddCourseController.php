<?php

namespace App\Http\Controllers\Admin\course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddCourseController extends Controller
{
    public function index()
    {
        return view('admin.course.addCourse');
    }
}
