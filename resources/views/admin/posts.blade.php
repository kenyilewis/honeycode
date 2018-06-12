@extends('master')
@section('content')
<div class="container">


  <hr>
  <h1>Editar Posteos</h1>
  <hr>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">User</th>
      <th scope="col">Date</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($posts as $post)
      <tr>
        <td><a href="/post/{{$post->id}}">{{ $post->title }}</a></td>
        <td>User</td>
        <td>{{ $post->created_at->toFormattedDateString() }}</td>
        <td>
        <a href="#" class="btn btn-danger">Delete</a> </td>
      </tr>
    @endforeach
  </tbody>
</table>

</div>
@endsection
