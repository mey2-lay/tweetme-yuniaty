<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Illuminate\Http\Request;
use App\Tweet;

class TweetController extends Controller
{
    public function index()
    {
        // dd("test tweet");
        $tweets = Tweet::orderBy('id', 'desc')->get();
        return view('tweet', compact('tweets'));
    }

    public function tweet(Request $request)
    {
        // DB::table('tweets')->insert([
        //     'user_id' => Auth::id(),
        //     'content'=> $request->tweet,
        // ]);
        Tweet::create([
            'user_id' => Auth::id(),
            'content'=> $request->tweet,
        ]);

        return redirect('/tweet');
    }
}
