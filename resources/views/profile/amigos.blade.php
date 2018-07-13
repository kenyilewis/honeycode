@extends('master')
@section('content')


  @forelse ($friends as $friend)
    <div class="lista-amigos container">
      <div class="row">
    <div class="amigos col-md-4" >
  <img class=" rounded-circle img-responsive" src="/images/avatars/{{$friend->avatar}}" alt="avatar de {{$friend->user}}" width="150px" height="150px">
  <div class="card-body">
    <h5 class="card-title"><a href="/user/{{$friend->user}}">{{$friend->user}}</a></h5>
    <p class="card-text"> Nombre: {{$friend->name}}<br> Email: {{$friend->email}}</p>
    <a href="/mensaje/nuevo/{{$friend->user}}" class="btn btn-primary">Enviar Mensaje</a>
    <a href="/amigos/eliminar/{{ $friend->getrel($friend->id) }}" class="btn btn-danger">Eliminar</a>
  </div>
</div>
</div>
  </div>
  @empty
    <div class="">
      <h1>Aun no tenes amigos</h1>
    </div>
    <br>
    <div class="">
      <a href="/user/{{auth()->user()->user}}" class="btn btn-primary">Volver</a>

    </div>
  @endforelse

@endsection
