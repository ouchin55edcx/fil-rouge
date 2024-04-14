<?php

namespace App\Http\Controllers\Community;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function store(Request $request)
    {
          //validation

        $validateData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required|string',
            'image.*' => 'required|image|max:2048', // Max 2MB image file size for each file
        ]);

//        dd($validateData);

        $post = new Post();
        $post->title = $validateData['title'];
        $post->content = $validateData['content'];
        $post->user_id = Auth::user()->id;
        $post->save();

        // Handle file uploads
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $file) {
                $imagePath = $this->storeImage($file);
                // Create a new Image record linked to the complaint
                Image::create([
                    'path' => $imagePath,
                    'imageable_id' => $post->id,
                    'imageable_type' => Post::class,
                ]);
            }
        }

        return redirect()->back()->with('success', 'Complaint submitted successfully!');

    }

    private function storeImage($image)
    {
        $directory = 'images';
        return $image->store($directory, 'public');
    }

    public function like(Request $request, $postId)
    {
        try {
            // Find the post by ID
            $post = Post::findOrFail($postId);

            // Get the authenticated user's client relationship
            $client = Auth::user()->client;

            // Check if the client has already liked the post
            $isLiked = $client->likedPosts()->where('post_id', $postId)->exists();

            if ($isLiked) {
                // Unlike the post
                $client->likedPosts()->detach($postId);
                $message = 'Post unliked successfully.';
            } else {
                // Like the post
                $client->likedPosts()->attach($postId);
                $message = 'Post liked successfully.';
            }

            // Get updated likes count
            $likesCount = $post->likedByClients()->count();

            // Return JSON response with success message and updated likes count
            return response()->json(['message' => $message, 'likes_count' => $likesCount], 200);
        } catch (\Exception $e) {
            // Handle any exceptions (e.g., post not found)
            return response()->json(['error' => 'Failed to process like action.'], 500);
        }
    }


    public function save(Request $request, $postId)
    {
        try {
            $post = Post::findOrFail($postId);
            $user = Auth::user();

            if ($user->savedPosts()->where('post_id', $postId)->exists()) {
                // Unsave the post
                $user->savedPosts()->detach($postId);
                $message = 'Post unsaved successfully.';
            } else {
                // Save the post
                $user->savedPosts()->attach($postId);
                $message = 'Post saved successfully.';
            }

            return response()->json(['message' => $message], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to process save action.'], 500);
        }
    }
}
