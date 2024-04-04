<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function store(Request $categorieRequest)
    {
        // Validate the incoming request data
        $categorieRequest->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'required|image|max:2048', // Assuming you only allow image files
        ]);

        // Create the category
        $category = Category::create([
            'name' => $categorieRequest->name,
            'description' => $categorieRequest->description,
        ]);

        // Store the image for the category
        if ($categorieRequest->hasFile('image')) {
            $imagePath = $categorieRequest->file('image')->store('images', 'public');

        }
        // Create the image record in the images table
        Image::create([
            'path' => $imagePath,   
            'imageable_id' => $category->id,
            'imageable_type' => Category::class,
        ]);

        return redirect()->back()->with('success', 'Category created successfully.');
    }

    private function move($image)
    {
        // Define the directory where you want to store the images
        $directory = 'images';

        // Move the uploaded image to the defined directory
        $imageName = $image->store($directory);

        // Return the image path
        return $imageName;
    }
}
