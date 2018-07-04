<tr class="tr-post">
     <td class="td-post"><strong><a href="/post/{{ $post->id }}">{{$post->title}} </a></strong></td>
     <td class="td-post">{{$post->created_at->toFormattedDateString()}}</td>
     <td class="td-post"><a href="/user/{{$post->user->user}}">{{$post->user->user}}</a></td>
   </tr>
