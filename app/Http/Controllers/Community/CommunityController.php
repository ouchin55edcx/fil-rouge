<?php

namespace App\Http\Controllers\Community;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class CommunityController extends Controller
{
    public function index()
    {
        $posts = Post::with(['image', 'comments.user', 'user'])->orderBy('created_at', 'desc')->get();
//        dd($posts);
        return view('community.index', compact('posts'));
    }
}
