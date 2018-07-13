@extends('master')

@section('content')
  <div class="container">
    <h1>Mostrar Posts</h1>
    <hr>
    <div class="crear-post">
      <a href="/post/create" class="btn btn-success">Crear Nuevo Post</a>
      <a href="#" class="btn btn-secondary" id="buscar">Buscar</a>
    </div>
    <br>

    <form action="/post/buscar" method="get" id="form_buscar" style="display:none">
      <div class="row" >
        <div class="col">
          <input type="text" class="form-control" name="busqueda">
        </div>
        <div class="col">
          <button type="submit" class="btn btn-danger" name="button">Buscar</button>
        </div>
      </div>
    </form>
    <table class="tabla-post">
  <thead>
    <tr class="tr-post">
      <th class="th-post fila1">Titulo</th>
      <th class="th-post">Fecha de creacion</th>
      <th class="th-post">Usuario</th>
    </tr>
  </thead>
  <tbody>
  @each('posts._card', $posts, 'post')

  </tbody>
</table>

    {{ $posts->links() }}
</div>
@endsection
@section('meta')
  <script src="/js/postindex.js" charset="utf-8"></script>
@endsection
