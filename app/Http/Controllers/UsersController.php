<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Tweets;

class UsersController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        $tweets = Tweets::join('users', 'users.id', '=', 'tweets.user_id')
        ->select('tweets.*', 'users.name')
        ->orderBy('created_at', 'desc')
        ->get();

         return view('profile.index')->with('users', User::all());
         return view('profile.index')->with ('tweets', Tweets::all()); ///šis nestrādā, var pārbaudīt ar guest, jo guest nav tweet

    }


}
/////$tweets = tweets::alll()->where(['user_id' => $userId]); šis itkā pārbauda vai tweeta veidotāja id sakrīt ar user id, kas ir ielogojies .