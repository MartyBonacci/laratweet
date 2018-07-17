<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller {
    public function create(Request $request, Post $post) {
        // create post
        $createdPost = $request->user()->posts()->create([
            'body' => $request->body,
        ]);
        // return the response
        return response()->json($post->with('user')->find($createdPost->id));
    }
}
