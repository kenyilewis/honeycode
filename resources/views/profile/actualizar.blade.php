@extends('master')
@section('content')
  <div class="col-md-8">

  <div class="form-group col-md-8">
    <h3>Informacion Adicional</h3>
    <br />
    <form class="form-group" action="controllers/update.controller.php" method="post" enctype="multipart/form-data">
    <input type="text" name="id" value=" ?>" hidden>
    @csrf

    <label>Cargar Imagen de Perfil</label>
    <input type="file" class="form-control">
    <label>Conocimientos</label><br>
    <input type="checkbox" name="vehicle" value="php"> PHP
    <input type="checkbox" name="vehicle" value="html"> HTML<br>
    <input type="checkbox" name="vehicle" value="css"> CSS<br>
    <input type="checkbox" name="vehicle" value="js"> Javascript
    <input type="checkbox" name="vehicle" value="java"> Java<br>
    <input type="checkbox" name="vehicle" value="ruby"> Ruby<br>
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
