<?php

namespace App\Http\Controllers\Courses;

use App\Http\Controllers\Controller;
use App\Models\Lesson;
use App\Models\Question;
use App\Models\Task;
use Illuminate\Http\Request;

class CourseDetailsController extends Controller
{
    public function index(Request $request)
    {
        $lessonId = $request->query('id');
        $lesson = Lesson::findOrFail($lessonId);
        $thisLesson = Lesson::where('id', $lesson->id)->with('image')->first(); // Retrieve the single lesson object
    
        $tasks = Task::where('lesson_id', $lesson->id)
            ->with('questions.choices')
            ->get();
    
        // dd($thisLesson); // Remove the dd() statement
    
        return view('courses.course.course_details', [
            'lesson' => $lesson,
            'tasks' => $tasks,
            'thisLesson' => $thisLesson // Use the correct variable name
        ]);
    }
}
