<?php

namespace App\Http\Controllers;

use App\Mensajes;
use App\User;
use Illuminate\Http\Request;

class MensajesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $mensajes = Mensajes::where('remit_id', auth()->id())->latest()->paginate(10);

      return view('/mensajes', compact('mensajes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($user)
    {
      $usuario = User::where('user', $user)->get()->first();
      return view('/mensajes/nuevo', compact('usuario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate(request(),[
        'body' => 'required|min:10'
      ]);

      Mensajes::create([
        'title' => request('title'),
        'body' => htmlentities(request('body')),
        'user_id' => auth()->id(),
        'remit_id' => request('id'),
        'read' => '0'
      ]);
      return redirect('user/'.auth()->user()->user);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Mensajes  $mensajes
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $mensaje = Mensajes::find($id);
      $mensaje->read = '1';
      $mensaje->save();
      return view('mensajes.show', compact('mensaje'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mensajes  $mensajes
     * @return \Illuminate\Http\Response
     */
    public function edit(Mensajes $mensajes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mensajes  $mensajes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mensajes $mensajes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mensajes  $mensajes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Mensajes::find($id)->delete();
        return redirect('/mensajes');
    }
}
