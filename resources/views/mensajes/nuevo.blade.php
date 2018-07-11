@extends('master')
@section('content')
  <div class="container">
    <hr>
    <h1>Nuevo Mensaje</h1>
    <hr>

    <form method="POST" action='/mensaje'>
      @csrf
      @include('layouts.errors')
      <div class="form-group">
        <input type="text" name="id" value="{{$usuario->id}}" hidden>
        <label for="desti">Para</label>
          <input type="text" class="form-control" id="desti" name="title" value="{{$usuario->user}}" disabled>
      </div>
      <div class="form-group">
        <label for="title">Asunto</label>
          <input type="text" class="form-control" id="title" name="title">
      </div>
      <div class="form-group">
        <label for="body">Mensaje</label>
        <textarea name="body" class="form-control" rows="8" cols="80"></textarea>
      </div>
      <button type="submit" class="btn btn-block btn-success">Enviar Mensaje</button>
    </form>

  </div>


@endsection
@section('meta')
  <script src="{{asset('vendor/ckeditor/ckeditor.js')}}" charset="utf-8"></script>

  <script type="text/javascript">
    CKEDITOR.replace('body');
  </script>
@endsection
