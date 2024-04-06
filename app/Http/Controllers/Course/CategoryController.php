<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::with('image')->get();
        // dd($categories);
        return view('courses.category.index', compact('categories'));
    }

    // public function index(Request $request)
    // {
    //     $categoryId = $request->query('id');
    //     $category = Category::findOrFail($categoryId);
    //     $lessons = Lesson::where('category_id', $category->id)->with('image')->get();
    //     // dd($lessons);    
    //     return view('courses.course_list', compact('lessons'));
    // }
}
