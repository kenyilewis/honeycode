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
    <div class="comments">
      <ul class="list-group">

      @foreach ($post->comments as $comment)
      <li class="list-group-item">{{ $comment->body }} - <i>{{$comment->created_at->diffForHumans()}}</i></li>
      @endforeach

    </ul>
    </div>
  </div>
@endsection
