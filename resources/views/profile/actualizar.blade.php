@extends('master')
@if (auth()->user()->id == $usuario->id)
@section('content')
  <div class="col-md-8">


  <div class="form-group col-md-8">
    <h3>Informacion Adicional</h3>
    <br />
    <form class="form-group" action="/profile/actualizar/{{{$usuario->id}}}" method="post" enctype="multipart/form-data">
    <input type="text" name="id" value=" ?>" hidden>
    @csrf
    <div class="">
      <label for="name">Nombre</label>
      <input class="form-control" type="text" name="name" value="{{$usuario->name}}" ><br>
    </div>
    <div class="">
      <label for="user">Usuario</label>
      <input class="form-control"type="text" name="user" value="{{$usuario->user}}" disabled><br>
    </div>
    <div class="">
      <label for="email">Email</label>
      <input class="form-control"type="text" name="email" value="{{$usuario->email}}" disabled><br>
    </div>

    <label>Cargar Imagen de Perfil</label>
    <input type="file" class="form-control" name="file">
    <label>Perfil Facebook</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">  <i class="fab fa-facebook-f"></i>&nbsp;</div>
      </div>
      <input type="text" class="form-control" name="facebook" id="inlineFormInputGroupusuarioname" value="{{$usuario->facebook}}">
    </div>
    <label>Perfil LinkedIn</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">  <i class="fab fa-linkedin-in"></i>&nbsp;</div>
      </div>
      <input type="text" class="form-control"  name="linkedin" id="inlineFormInputGroupusuarioname" value="{{$usuario->linkedin}}">
    </div>
    <label>Web Propia</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text"><i class="fas fa-at"></i>&nbsp;</div>
      </div>
      <input type="text" class="form-control" name="web" id="inlineFormInputGroupusuarioname" value="{{$usuario->propia}}">
    </div>
    <br>
   <button type="submit" class="btn btn-warning" name="button">Actualizar Informacion</button>
  </form>
  </div>
  </div>
  </div>
  <!-- ROW END -->
@endsection
@else
@section('content')
<p>ESTE LUGAR NO TE PERTENECE!!</p>
@endsection
@endif
