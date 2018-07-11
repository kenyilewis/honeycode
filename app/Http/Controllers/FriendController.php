<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FriendController extends Controller
{
    /**
     * Listar información general
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        // Listar usuarios
        $users = User::all();

        // Todos los amigos del usuario conectado
        $friends = Auth::check() ? Auth::user()->getFriends() : null;

        return view('example.index', compact('users', 'friends'));
    }

    public function beFriend($id)
    {
        // Usuario al que se le envía la solicitud
        $recipient = User::find($id);

        // Enviar solicitud de amistad
        Auth::user()->befriend($recipient);

        // Aceptar solicitud de amistad
        $recipient->acceptFriendRequest(Auth::user());

        return redirect('/');
    }

    /**
     * Eliminar Amigos
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function removeFriend($id)
    {
        // Usuario con el que se elimina la amistad
        $recipient = User::find($id);

        Auth::user()->unfriend($recipient);
        return redirect('/');
    }
}
