<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index() {
        $posts = Post::with('user')->latest()->get();
        return view('dashboard', compact('posts'));
    }

    public function store(Request $request) {
        $request->validate(['content' => 'required|max:255']);

        Post::create([
            'content' => $request->content,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('dashboard');
    }

    public function destroy(Post $post) {
        if ($post->user_id == Auth::id()) {
            $post->delete();
        }

        return redirect()->route('dashboard');
    }
}
