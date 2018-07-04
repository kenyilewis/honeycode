@extends('master')

@section('content')
  <div class="container">
    <h1>Mostrar Posts</h1>
    <hr>
    <div class="crear-post">
      <a href="/post/create" class="btn btn-success">Crear Nuevo Post</a>
    </div>
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
    {{--<table class="table">
    <thead>
      <tr>
        <th scope="col">Title</th>
        <th scope="col">User</th>
        <th scope="col">Date</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($posts as $post)
        <tr>
          <td><a href="/post/{{$post->id}}">{{ $post->title }}</a></td>
          <td>User</td>
          <td>{{ $post->created_at->toFormattedDateString() }}</td>
        </tr>

      @endforeach
    </tbody>
  </table>--}}
  </div>
@endsection
