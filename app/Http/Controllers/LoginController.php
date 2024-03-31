<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            'login' => 'required|string',
            'password' => 'required|string',
        ]);
    
        $field = filter_var($credentials['login'], FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
    
        if (Auth::attempt([$field => $credentials['login'], 'password' => $credentials['password']])) {
            $user = Auth::user();
            switch ($user->role) {
                case 'Client':
                    return redirect()->route('client.dashboard');
                    break;
                case 'Expert':
                    return redirect()->route('expert.dashboard');
                    break;
                case 'SuperAdmin':
                    return redirect()->route('superadmin.dashboard');
                    break;
                default:
                    // Redirect to a default dashboard or handle this case as needed
                    return redirect()->route('default.dashboard');
                    break;
            }
        }
    
        return back()->withErrors([
            'login' => 'The provided credentials do not match our records.',
        ]);
    }
    
}
