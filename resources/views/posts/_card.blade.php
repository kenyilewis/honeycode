<div class="card">
  <div class="card-header">
  <h2>  <a href="/post/{{ $post->id }}">{{$post->title}}</a></h2>
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p>{{$post->body}}</p>
      <footer class="blockquote-footer">{{$post->created_at->toFormattedDateString()}}</footer>
    </blockquote>
  </div>
</div>
<hr>
