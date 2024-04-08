<?php

namespace App\Http\Controllers\Admin\course;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Image;
use App\Models\Lesson;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;

class AddCourseController extends Controller
{
        public function index()
        {
            $categories = Category::all();
            return view('admin.course.addCourse', compact('categories'));
        }
    
        public function store(Request $request)
        {
            // Validate the incoming request data
            $validatedData = $request->validate([
                'title' => 'required|string|max:255',
                'description' => 'required|string',
                'category_id' => 'required|exists:categories,id',
                'image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
            ]);
    
            // Create a new Lesson instance and populate its attributes
            $lesson = new Lesson();
            $lesson->title = $validatedData['title'];
            $lesson->description = $validatedData['description'];
            $lesson->category_id = $validatedData['category_id'];
            $lesson->save(); // Save the lesson to get the lesson ID
    
            // Handle image upload and associate it with the lesson
            if ($request->hasFile('image')) {
                $imagePath = $this->storeImage($request->file('image'));
                Image::create([
                    'path' => $imagePath,
                    'imageable_id' => $lesson->id,
                    'imageable_type' => Lesson::class,
                ]);
            }
    
            return redirect()->back()->with('success', 'Lesson created successfully.');
        }
    
        private function storeImage($image)
        {
            // Store the uploaded image in the 'public/images' directory
            return $image->store('images', 'public');
        }
    }

