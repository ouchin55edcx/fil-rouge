<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseDetailsController extends Controller
{
    public function index()
    {
        return view('courses.course_details');
    }
}
