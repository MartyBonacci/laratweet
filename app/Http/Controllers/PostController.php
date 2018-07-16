<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller {
    public function create(Request $request) {
        // create post
        $request->user()->posts()->create([
            'body' => $request->body,
        ]);
        // return the response

    }
}
