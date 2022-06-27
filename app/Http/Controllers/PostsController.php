<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class PostsController extends Controller
{
    public function index() {
        $posts = post::paginate(10);
        return view('posts.index', compact('posts') );
    }

    public function store(request $request) {
        
        // dd($request);
        $validated = $request->validate([
            'body' => 'required',
        ]);
        // dd($request);

    Post::create([
        'user_id' => auth()->user()->id,
        'body' => $request->body
    ]);
    
    return back();
    
    }
}
