<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Expert;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|in:Client,Expert',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        $user = User::create($validatedData);

        if ($validatedData['role'] === 'Client') {
            $request->validate([
                'phone_number' => 'required|string',
                'address' => 'required|string',
            ]);

            $user->client()->create([
                'phone_number' => $request->phone_number,
                'address' => $request->address,
            ]);
        } elseif ($validatedData['role'] === 'Expert') {
            $request->validate([
                'certificate' => 'required|string',
                'experience' => 'required|string',
            ]);

            $user->expert()->create([
                'certificate' => $request->certificate,
                'experience' => $request->experience,
            ]);
        }

        return redirect()->back()->with('success', 'Registration successful!');
    }
}
