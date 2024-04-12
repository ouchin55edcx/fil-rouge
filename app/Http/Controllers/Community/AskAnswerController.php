<?php

namespace App\Http\Controllers\Community;

use App\Http\Controllers\Controller;
use App\Models\AskAnswer;
use Illuminate\Http\Request;

class AskAnswerController extends Controller
{

    public function index()
    {
//        $askanswer = Ask::with('askanswer','user')->get();

        return view('community.askanswer');
    }


    public function store(Request $request)
    {
        // Validate request data
        $validatedData = $request->validate([
            'user_id' => 'required|integer',
            'ask_id' => 'required|integer',
            'content' => 'required|string',
        ]);

        // Create new AskAnswer instance
        $askAnswer = new AskAnswer();
        $askAnswer->user_id = $validatedData['user_id'];
        $askAnswer->ask_id = $validatedData['ask_id'];
        $askAnswer->content = $validatedData['content'];
        $askAnswer->save();

        // Return response (e.g., JSON response)
        return redirect()->back()->with('success', 'Answer submitted successfully!');
    }
}
