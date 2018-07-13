<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Friend;

class FriendsController extends Controller
{
    public function index()
    {
      $friends = auth()->user()->getFriends(auth()->user()->id);
      return view('profile.amigos', compact('friends'));

    }

    public function add($id)
    {
      $friendship = new Friend;
      $friendship->user_1 = auth()->user()->id;
      $friendship->user_2 = $id;
      $friendship->state = 1;
      $friendship->save();
      return back();
    }
    public function destroy($id)
    {
      $friend = Friend::find($id);

      $friend->delete();
      return back();
    }
}
