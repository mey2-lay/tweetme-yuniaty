<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Illuminate\Http\Request;
use App\Tweet;
use Storage;

class ProfileController extends Controller
{
    public function index($username)
    {
        $user = DB::table('users')->where('username', $username)->first();
        $tweets = Tweet::where('user_id', $user->id)->get();
        $followingIds = DB::table('follows')->where('user_id', $user->id)->pluck('following_user_id')->toArray();
    
        $myTweet = count($tweets); // menghitung jumlah tweets
        $myFollowing = DB::table('follows')->where('user_id', $user->id)->count(); // menghitung jumlah following
        $myFollower = DB::table('follows')->where('following_user_id', $user->id)->count(); // menghitung jumlah following
        return view('profile', compact('user', 'tweets', 'followingIds', 'myTweet', 'myFollowing', 'myFollower'));
    }

    public function edit()
    {
        $user = Auth::user();
        return view('edit-profile', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->bio = $request->bio;

        if ($request->avatar) {
            $avatar = Storage::put('avatar', $request->avatar);
            $user->avatar = $avatar;
        }

        if ($request->cover) {
            $avatar = Storage::put('avatar', $request->cover);
            $user->cover = $cover;
        }

        $user->save();
        return redirect('/profile/' . $user->username);
    }
}
