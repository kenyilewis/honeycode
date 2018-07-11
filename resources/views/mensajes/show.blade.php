@extends('master')
@section('content')
  <div class="container">
    <hr>
    <h1>Nuevo Mensaje</h1>
    <hr>
    <a href='/mensajes' name="back" class="btn btn-success">Volver</a>
    <a href="/mensaje/eliminar/{{$mensaje->id}}" name="delete" class="btn btn-danger">Eliminar mensaje</a>
    <form method="POST" action='/mensaje'>
      @csrf
      @include('layouts.errors')
      <div class="form-group">
        <label id="desti" for="desti">De</label>
          <input type="text" class="form-control" id="desti" name="title" value="{{$mensaje->user->user}}" disabled>
          <input type="text" name="id" value="{{$mensaje->user_id}}" hidden>
      </div>
      <div class="form-group">
        <label for="title">Asunto</label>
          <input type="text" class="form-control" name="title" value="{{$mensaje->title}}" id="asunto" disabled>
      </div>
      <div class="form-group">
        <label for="body">Mensaje</label>
        <textarea id="body" name="body" class="form-control" rows="8" cols="80" disabled>{!! html_entity_decode($mensaje->body) !!}</textarea>
      </div>
      <input type="button" class="btn btn-block btn-danger" name="" value="Responder" id="responde">
      <input type="submit" class="btn btn-block btn-success"  value="Enviar Mensaje" id="enviar" hidden>
    </form>

  </div>


@endsection
@section('meta')
  <script src="{{asset('vendor/ckeditor/ckeditor.js')}}" charset="utf-8"></script>

  <script type="text/javascript">

  </script>
  <script type="text/javascript">
    $('#responde').click(function(e){
      e.preventDefault();
      $('#desti').html('Para');
      $('#asunto').removeAttr('disabled');
      $('#body').removeAttr('disabled');
      CKEDITOR.replace('body');
      $('#enviar').removeAttr('hidden');
      $('#responde').attr('hidden ', true);
    })
  </script>
@endsection
