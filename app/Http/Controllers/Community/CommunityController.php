<?php

namespace App\Http\Controllers\Community;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommunityController extends Controller
{
    public function index()
    {
        $posts = Post::with(['image', 'comments.user', 'user'])->orderBy('created_at', 'desc')->get();
//        dd($posts);

        $posts = Post::all();
        $user = Auth::user();

        $postsWithSaveStatus = $posts->map(function ($post) use ($user) {

            $isSaved = $user->savedPosts()->where('post_id', $post->id)->exists();

            return [
                'post' => $post,
                'isSaved' => $isSaved,
            ];
        });

         //dd($postsWithSaveStatus);
        return view('community.index', compact('posts', 'postsWithSaveStatus'));
    }

}
