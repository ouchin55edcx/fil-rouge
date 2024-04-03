<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Lesson;
use Illuminate\Http\Request;

class CourseListController extends Controller
{
    public function index(Request $request)
    {
        $categoryId = $request->query('id');
        $category = Category::findOrFail($categoryId);
        $lessons = Lesson::where('category_id', $category->id)->get();
        // dd($lessons);    
        return view('courses.course_list', compact('lessons', 'category'));
    }

    // public function show(Category $category)
    // {
    //     $lessons = $category->lessons()->with('images')->get();
    //     dd($lessons);
    //     return view('courses.course_list', compact('lessons', 'category'));
    // }
}
