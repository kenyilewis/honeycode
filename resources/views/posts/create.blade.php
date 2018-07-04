@extends('master')
@section('content')
  <div class="container">
    <hr>
    <h1>Crea tu Post</h1>
    <hr>

    <form method="POST" action='/post'>
      @csrf
      @include('layouts.errors')
      <div class="form-group">
        <label for="title">Titulo</label>
          <input type="text" class="form-control" id="title" name="title" >
      </div>
      <div class="form-group">
        <label for="body">Post</label>
        <textarea name="body" class="form-control" rows="8" cols="80"></textarea>
      </div>
      <button type="submit" class="btn btn-block btn-success">Postear</button>
    </form>

  </div>


@endsection
@section('meta')
  <script src="{{asset('vendor/ckeditor/ckeditor.js')}}" charset="utf-8"></script>

  <script type="text/javascript">
    CKEDITOR.replace('body');
  </script>
@endsection
