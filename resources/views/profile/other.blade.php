@section('content')
  <div class="container">
      <section style="padding-bottom: 50px; padding-top: 50px;">
          <div class="row">
              <div class="col-md-4">
                  <img src="/images/avatars/{{$usuario->avatar}}" class="rounded-circle img-responsive" width="250px" height="250px" />
                  <br />
                  <br />
                    <ul>
                      <li>{{$usuario->user}}</li>
                      <li>{{$usuario->name}}</li>
                      <li>{{$usuario->email}}</li>
                    </ul>
                    <div >
                        <a href="{{$usuario->facebook}}" class="btn btn-social btn-facebook">
                            <i class="fab fa-facebook-f"></i>&nbsp; Facebook</a>
                        <a href="{{$usuario->propia}}" class="btn btn-social btn-google">
                            <i class="fas fa-at"></i>&nbsp; Web</a>
                        <a href="{{$usuario->linkedin}}" class="btn btn-social btn-LinkedIn">
                            <i class="fab fa-linkedin-in"></i>&nbsp; LinkedIn </a>
                    </div>
              </div>
              <div class="col-md-8">
                <div class="row">

                  @forelse ($amigos as $amigo)

                    @if ($amigo->id === auth()->user()->id)
                      <a href="/mensaje/nuevo/{{$usuario->user}}" class="btn btn-primary">Enviar mensaje</a>

                    @endif
                    @empty
                      <a href="/mensaje/nuevo/{{$usuario->user}}" id="amigos" class="btn btn-primary">Enviar mensaje</a>



                  @endforelse

                  @forelse ($amigos as $amigo)

                    @if ($amigo->id === auth()->user()->id)
                        <a href="/amigos/eliminar/{{ $amigo->getrel($usuario->id) }}" class="btn btn-danger btn-amigos">Eliminar de mis Amigos</a>

                    @endif
                    @empty

                        <a href="/amigos/agregar/{{$usuario->id}}" class="btn btn-success btn-amigos">Agregar a mis amigos</a>

                  @endforelse


                </div>
                <br>
                  <div class="row form-group col-12">
                      <h3>Posts pubicados por {{$usuario->user}}</h3>
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
                            <th>El usuario no tiene posteos</th>
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
                          <th>
                            No hay comentarios de {{$usuario->user}}
                          </th>
                        @endforelse
                      </tbody>
                    </table>
              </div>
          </div>

          <!-- ROW END -->


      </section>
      <!-- SECTION END -->
  </div>
  <!-- CONATINER END -->

  <!-- REQUIRED SCRIPTS FILES -->
  <!-- CORE JQUERY FILE -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.25.0/dist/sweetalert2.all.min.js" charset="utf-8"></script>
  <script src="/js/jquery-1.11.1.js"></script>
  <!-- REQUIRED BOOTSTRAP SCRIPTS -->
  <script src="/js/bootstrap.js"></script>
  <script type="text/javascript">
    $('#amigos').click(function(e){
      e.preventDefault();
      swal({
        type: 'error',
        title: 'Oops...',
        text: 'Solo puedes enviar mensajes a tus amigos',
      });
    })
  </script>

@endsection
