<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseListController extends Controller
{
    public function index()
    {
        return view('courses.course_list');
    }
}
