<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function index()
    {
        $userId = Auth::id();

        $userInfo = Client::with('user')
            ->where('user_id', $userId)
            ->first();

//        dd($userInfo);
        return view('client.index',compact('userInfo'));
    }

    public function update(Request $request, $id)
    {
        // Find the client record by ID
        $client = Client::findOrFail($id);

        // Validate the incoming request data
        $validatedData = $request->validate([
            'username' => 'required|string',
            'email' => ['required', 'email', 'unique:users,email,' . $client->user->id],
            'phone' => 'required|string',
            'address' => 'required|string',
        ]);

        if ($validatedData['email'] != $client->user->email) {
            // Check if the email already exists in the users table
            $emailExists = User::where('email', $validatedData['email'])->where('id', '!=', $client->user->id)->exists();

            if ($emailExists) {
                // Display an alert and redirect back
                return redirect()->back()->with('error', 'The email address is already in use.');
            }
        }

        // Update user's information
        $client->user->update([
            'username' => $validatedData['username'],
            'email' => $validatedData['email'],
        ]);

        // Update client's information
        $client->update([
            'phone_number' => $validatedData['phone'],
            'address' => $validatedData['address'],
        ]);

        // Redirect back with success message
        return redirect()->route('client.index')->with('success', 'Client information updated successfully!');
    }
}
