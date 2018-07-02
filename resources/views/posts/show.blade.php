@extends('master')
@section('content')
  <div class="container container-body">
    <div class="card">
      <div class="card-header">
        {{$post->title}}
      </div>
      <div class="card-body">
        <blockquote class="blockquote mb-0">
          <p>{{$post->body}}</p>
          <footer class="blockquote-footer">{{$post->created_at}}</footer>
        </blockquote>
      </div>
    </div>
    <hr>
    <div class="comments">
      <ul class="list-group">

      @foreach ($post->comments as $comment)
      <li class="list-group-item">{{$comment->user->user}}: <br>{{ $comment->body }} - <i>{{$comment->created_at->diffForHumans()}}</i></li>
      @endforeach

    </ul>
    </div>
    <hr>
    <div class="card">
      <div class="card-block">
        <form action="/post/{{$post->id}}/comments" method="post">
          @csrf
          <div class="form-group">
            <textarea name="body" placeholder="Tu Comentario" class="form-control" required></textarea>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-success">Enviar</button>
          </div>

        </form>
        @include('layouts.errors')
      </div>
    </div>
  </div>
@endsection
