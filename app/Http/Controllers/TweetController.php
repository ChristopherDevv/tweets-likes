<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    public function index()
    {
        $tweets = Tweet::all();

        return view('tweets', ['tweets' => $tweets]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:3|max:50',
            'description' => 'required|min:5'
        ]);

        Tweet::create([
            'title' => $request->title,
            'description' => $request->description
        ]);

        return redirect()->route('tweet.index');

    }

    public function edit(Tweet $tweet)
    {
        return view('tweetsEdit', [
            'tweet' => $tweet
        ]);
    }

    public function update(Request $request, Tweet $tweet)
    {
        $this->validate($request, [
            'title' => 'required|min:3|max:50',
            'description' => 'required|min:5'
        ]);

        $tweet->update($request->all());

        return redirect()->route('tweet.index')->with('success', 'Tweet actualizado con exito');
    }

    public function destroy(Tweet $tweet)
    {
        $tweet->delete();

        return redirect()->route('tweet.index')->with('success', 'El tweet se ha eliminado con exito');
    }

}
