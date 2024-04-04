<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index()
    {
        $categories = Category::with('image')->get();
        // dd($categories);
        return view('courses.index', compact('categories'));
    }
}
