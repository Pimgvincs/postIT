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
        return view('profile.index')->with('users', User::all());

    }
    public function destroy($id)
    {
        User::where(['id' => $id])->delete();
        return redirect('/profile');
    }
    public function edit($id)
    {
        $user = User::find($id);
        return view ("profile.edit",['user', $user]);
    }
    public function update(Request $request, User $users, $id)
    {
         $request->validate([
            'name' => 'required',
            'email' => 'required'
        ]);

        $user = User::find($id);
        $user->name = $request->name;
        $user->save();

        return redirect ("/profile/$id");
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required'
        ]);
        
        return redirect('/profile/$id');
    }




}
