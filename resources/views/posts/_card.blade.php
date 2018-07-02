<div class="card">
  <div class="card-header">
  <h2>  <a href="/post/{{ $post->id }}">{{$post->title}} </a> <em class="user_name">by <a href="/user/{{$post->user->user}}">{{$post->user->user}}</a> at {{$post->created_at->toFormattedDateString()}}</em> </h2>
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p>{{$post->body}}</p>
      {{$post->created_at->toFormattedDateString()}}
    </blockquote>
  </div>
</div>
<hr>
