<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Illuminate\Http\Request;
use App\Follow;

class ExploreController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->where('id', '<>', Auth::id())->get();
        $followingIds = DB::table('follows')->where('user_id', Auth::id())->pluck('following_user_id')->toArray();
        return view('explore', compact('users', 'followingIds'));
    }

    public function follow($id)
    {
        Follow::create([
            'user_id' => Auth::id(),
            'following_user_id' => $id,
        ]);

        return redirect('/explore');
    }

    public function unfollow($id)
    {
        Follow::where('user_id', Auth::id())->where('following_user_id', $id)->delete();
        return redirect('/explore');
    }
}
