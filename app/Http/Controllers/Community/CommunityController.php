<?php

namespace App\Http\Controllers\Community;

use App\Http\Controllers\Controller;
use App\Models\Ask;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommunityController extends Controller
{
    public function index()
    {
        $communityItems = DB::select("
    SELECT id, title, content, user_id, created_at, updated_at, 'post' as type
    FROM posts
    UNION ALL
    SELECT id, null as title, content, user_id, created_at, updated_at, 'ask' as type
    FROM asks
    ORDER BY created_at DESC
");

//        $posts = Post::with('image')->orderBy('created_at')->get();
//        dd($communityItems);
        return view('community.index', compact('communityItems'));
    }
}
