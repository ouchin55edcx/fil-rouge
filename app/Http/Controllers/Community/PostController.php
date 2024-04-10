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

}
