<?php

namespace App\Http\Controllers;

use App\Models\Client;
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
}
