<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Comment;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($user)
    {
      $usuario = User::where('user', $user)->get()->first();
      $posts = Post::where('user_id', $usuario->id)->get();
      $comentarios = Comment::where('user_id', $usuario->id)->get();
      $amigos = $usuario->getFriends($usuario->id);
      return view('profile', compact('usuario', 'posts', 'comentarios', 'amigos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $usuario = User::find($id);
        return view('/profile/actualizar', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $user = User::find($id);
      $user->name = request('name');
      $user->facebook = request('facebook');
      $user->linkedin = request('linkedin');
      $file = $request->file('file');
      $ext =  $file->getClientOriginalExtension();
      $nombre = uniqid()."_".$user->id .".". $ext;
      \Storage::disk('local')->put($nombre,  \File::get($file));
      $user->avatar = $nombre;
      $user->save();

      return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
