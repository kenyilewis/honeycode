<tr class="tr-post">
   <td class="td-post"><a href="/mensaje/{{ $mensaje->id }}">
     @if (!$mensaje->read)
       <strong><b>{{$mensaje->title}}</b></strong>
    @else
      {{$mensaje->title}}
     @endif
      </a></td>
   <td class="td-post">{{$mensaje->created_at->toFormattedDateString()}}</td>
   <td class="td-post"><a href="/user/{{$mensaje->user->user}}">{{$mensaje->user->user}}</a></td>
   <td class="td-post"><a href="#" class="btn"><i class="fas fa-trash-alt"></i></a><a href="#" class="btn"><i class="fas fa-share-square"></i></a></td>
 </tr>
