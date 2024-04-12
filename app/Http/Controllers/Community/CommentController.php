<?php

namespace App\Http\Controllers\Community;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, $postId)
    {
        // Validate request data
        $request->validate([
            'content' => 'required|string|max:255',
        ]);

        // Find the post by ID
        $post = Post::findOrFail($postId);

        // Create a new comment
        $comment = new Comment();
        $comment->user_id = auth()->user()->id; // Assuming authenticated user
        $comment->post_id = $post->id;
        $comment->content = $request->input('content');
        $comment->save();

        // Optionally, you can return a response or redirect back
        return redirect()->back()->with('success', 'Comment added successfully.');
    }
}
