@section('content')
  <div class="container">
      <section style="padding-bottom: 50px; padding-top: 50px;">
          <div class="row">
              <div class="col-md-4">
                  <img src="/images/avatars/{{$usuario->avatar}}" class="rounded-circle img-responsive" width="250px" height="250px" />
                  <br />
                  <br />
                  <form class="" action="index.html" method="post">
                  <label>Nombre de Usuario</label>
                  <input id="user" type="text" class="form-control profiledata" placeholder="{{$usuario->user}} " disabled>
                  <label>Nombre</label>
                  <input id="name" type="text" class="form-control profiledata" placeholder="{{$usuario->name}}" disabled>
                  <label>Email</label>
                  <input type="text" class="form-control profiledata" placeholder="{{$usuario->email}}" disabled>
                  <br>
                  <a class="btn btn-success" id="actualizar" href="/profile/actualizar/{{$usuario->id}}">Actualizar datos</a>
                  <br /><br/>
                  </form>
              </div>
              <div class="col-md-8">
                @if ($usuario->avatar == 'default.jpg')
                  <div class="alert alert-info">
                      <h2>Biografia : </h2>
                      <h4>Hola {{$usuario->name}}</h4>
                      <p>
                          Bienvenido a HONEYCODE. Por favor termina de completar tu perfil asi podes empezar a compartir tus conocimientos con los demas.
                      </p>
                  </div>
                  <br>
                @endif
                  <div class="row form-group col-12">
                    <a href="/mensajes" class="btn btn-danger botonperfil">Mis Mensajes</a>
                    <a href="/amigos" class="btn btn-success botonperfil">Amigos</a>
                  </div>
                  <div class="row form-group col-12">
                      <h3>Mis Posteos</h3>
                      <br />
                      <table class="table table-sm">
                        <thead>
                          <tr>
                            <th scope="col">Titulo</th>
                            <th scope="col">Fecha de creacion</th>
                            <th scope="col">Ultima Actualizacion</th>
                          </tr>
                        </thead>
                        <tbody>
                          @forelse ($posts as $post)
                            <tr>
                              <th scope="row"><a href="/post/{{$post->id}}">{{$post->title}}</a></th>
                              <td>{{$post->created_at}}</td>
                              <td>{{$post->updated_at}}</td>
                            </tr>
                          @empty

                            <th>Todavia no creaste ningun post. <a href="/post/create"> Empieza ya!!</a></th>
                          @endforelse
                        </tbody>
                      </table>
                  </div>
                  <br>

                    <h3>Ultimos Comentarios</h3>
                    <table class="table table-sm">
                      <thead>
                        <tr>
                          <th scope="col">Fecha</th>
                          <th scope="col">Post</th>
                          <th scope="col">Comentario</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse ($comentarios as $comentario)
                          <tr>
                            <th scope="row">{{$comentario->created_at}}</th>
                            <td><a href="/post/{{$comentario->post->id}}"> {{$comentario->post->title}}</a></td>
                            <td>{{$comentario->body}}</td>
                          </tr>
                          @empty
                          <th>No hay comentarios</th>

                        @endforelse
                      </tbody>
                    </table>
                      <hr>
                      <h2>Mis Amistades</h2>

                    <table class="table table-sm">
                    <thead>
                      <tr>
                        <th scope="col">Amigo</th>
                        <th scope="col">Accion</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse ($amigos as $amigo)
                        <tr>
                          <td><a href="/user/{{$amigo->user}}">{{$amigo->user}}</a></td>
                          <td><a href="/amigos/eliminar/{{ $amigo->getrel($amigo->id) }}" class="btn"><i class="fas fa-trash-alt"></i></a><a href="/mensaje/nuevo/{{$amigo->user}}" class="btn"><i class="far fa-envelope"></i></a></td>
                        </tr>
                        @empty
                        <th>No tienes amigos</th>

                      @endforelse
                    </tbody>
                    </table>
              </div>
          </div>





      </section>
      <!-- SECTION END -->
  </div>
  <!-- CONATINER END -->

  <!-- REQUIRED SCRIPTS FILES -->
  <!-- CORE JQUERY FILE -->
  <script src="/js/jquery-1.11.1.js"></script>
  <!-- REQUIRED BOOTSTRAP SCRIPTS -->
  <script src="/js/bootstrap.js"></script>

@endsection
@section('meta')
  <script src="/js/profile.js"></script>
@endsection
