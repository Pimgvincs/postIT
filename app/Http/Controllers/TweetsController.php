<?php

namespace App\Http\Controllers;

use App\Models\Tweets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TweetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tweets = Tweets::join('users', 'users.id', '=', 'tweets.user_id')
        ->select('tweets.*', 'users.name')
        ->orderBy('created_at', 'desc')
        ->get();

        return view('tweets.index', ['tweets' => $tweets]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!Auth::check())
        {

            return redirect('/login');

        }
        return view('tweets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'text' => 'required'
        ]);

        tweets::create([
            'text' => $request->text,
            'user_id' => Auth::id()
        ]);
        return redirect('/tweets');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tweets  $tweets
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tweet = Tweets::find($id);
        return view ('tweets.show', ['tweet' => $tweet]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tweets  $tweets
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tweet = Tweets::find($id);
        return view ("/tweets/edit", ['tweet' =>$tweet]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tweets  $tweets
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tweets $tweets, $id)
    {
         $request->validate([
            'text' => 'required'
        ]);

        $tweet = Tweets::find($id);
        $tweet->text = $request->text;
        $tweet->save();

        return redirect ("/tweets/$id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tweets  $tweets
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tweets::where(['id' => $id])->delete();
        return redirect('/tweets');
    }

     public function search(Request $request)
    {
        $search = $request->input('search');

        $tweets = Tweets::query()
            ->where('text', 'like', "%{$search}%")
            ->get();

        return view('search', compact('tweets'));
    }

}
