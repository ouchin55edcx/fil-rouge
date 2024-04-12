<?php

namespace App\Http\Controllers\Community;

use App\Http\Controllers\Controller;
use App\Models\Ask;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AskController extends Controller
{

    public function index()
    {
        $asks = Ask::with(['user', 'askanswer' => function($query) {
            $query->latest()->take(1);
        }])->get();
//        dd($asks);
        return view('community.ask',compact('asks'));
    }
    public function store(Request $request)
    {
        //validation

        $validateData = $request->validate([
            'content' => 'required|string',
        ]);

//        dd($validateData);

        $post = new Ask();
        $post->content = $validateData['content'];
        $post->user_id = Auth::user()->id;
        $post->save();

        // Handle file uploads

        return redirect()->back()->with('success', 'Complaint submitted successfully!');

    }

}
