<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'text' => 'required',
            'tweetid' => 'required|numeric'
        ]);


        Comment::create ([
            'user_id' => Auth::id(),
            'text' => $request->text,
            'tweets_id' => $request->tweetid 
        ]);
        return redirect("/tweets/$request->tweetid");
    }
}
