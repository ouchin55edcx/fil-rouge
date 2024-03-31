<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

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
                    return redirect(RouteServiceProvider::CLIENT_HOME);
                    break;
                case 'Expert':
                    return redirect(RouteServiceProvider::EXPERT_HOME);
                    break;
                case 'SuperAdmin':
                    return redirect(RouteServiceProvider::SUPERADMIN_HOME);
                    break;
                default:
                    return redirect(RouteServiceProvider::HOME);
                    break;
            }
        }
    
        return back()->withErrors([
            'login' => 'The provided credentials do not match our records.',
        ]);
    }

}
