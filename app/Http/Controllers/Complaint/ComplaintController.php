<?php

namespace App\Http\Controllers\Complaint;

use App\Http\Controllers\Controller;
use App\Models\Complaint;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ComplaintController extends Controller
{
    public function index()
    {
        return view('complaint.index');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'attack' => 'required|string',
            'description' => 'required|string',
            'phone_number' => 'required|string',
            'image.*' => 'required|image|max:2048', // Max 2MB image file size for each file
        ]);
    
        $complaint = new Complaint();
        $complaint->attack = $validatedData['attack'];
        $complaint->description = $validatedData['description'];
        $complaint->phone_number = $validatedData['phone_number'];
    
        $complaint->save();
    
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $file) {
                $imagePath = $this->storeImage($file);
                Image::create([
                    'path' => $imagePath,
                    'imageable_id' => $complaint->id,
                    'imageable_type' => Complaint::class,
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