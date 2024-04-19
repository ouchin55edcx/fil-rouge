<?php

namespace App\Http\Controllers;

use App\Models\score;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScoreController extends Controller
{
    public function submitAnswer(Request $request)
    {
        $validatedData = $request->validate([
            'task_id' => 'required|exists:tasks,id',
            'answer' => 'required|in:0,1', // Ensure the answer is either 0 or 1
        ]);

        $taskId = $validatedData['task_id'];
        $isCorrect = (bool) $validatedData['answer'];

        // Find the task
        $task = Task::find($taskId);

        if (!$task) {
            return response()->json(['error' => 'Task not found'], 404);
        }

        // Update task completion status if the answer is correct
        if ($isCorrect) {
            $task->is_complete = true;
            $task->save();

            // Add score logic (example)
            $user = auth()->user();
            $score = Score::firstOrNew(['user_id' => $user->id]);
            $score->score += 5; // Increment score by 5
            $score->save();
        }

        return response()->json(['success' => true]);
    }

}
