@section('content')
  <div class="container">
      <section style="padding-bottom: 50px; padding-top: 50px;">
          <div class="row">
              <div class="col-md-4">
                  <img src="images/default.jpg" class="rounded-circle img-responsive" width="250px" height="250px" />
                  <br />
                  <br />
                    <ul>
                      <li>{{$usuario->user}}</li>
                      <li>{{$usuario->name}}</li>
                      <li>{{$usuario->email}}</li>
                    </ul>
                    <div >
                        <a href="#" class="btn btn-social btn-facebook">
                            <i class="fab fa-facebook-f"></i>&nbsp; Facebook</a>
                        <a href="#" class="btn btn-social btn-google">
                            <i class="fab fa-google-plus-g"></i>&nbsp; Google</a>
                        <a href="#" class="btn btn-social btn-twitter">
                            <i class="fab fa-twitter"></i>&nbsp; Twitter </a>
                    </div>
              </div>
              <div class="col-md-8">
                <div class="row">
                  <a href="#" class="btn btn-primary">Enviar mensaje</a>
                  <a href="#" class="btn btn-warning">Agregar a mi equipo</a>
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
                          @foreach ($posts as $post)
                            <tr>
                              <th scope="row"><a href="/post/{{$post->id}}">{{$post->title}}</a></th>
                              <td>{{$post->created_at}}</td>
                              <td>{{$post->updated_at}}</td>
                            </tr>
                          @endforeach
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
                        @foreach ($comentarios as $comentario)
                          <tr>
                            <th scope="row">{{$comentario->created_at}}</th>
                            <td><a href="/post/{{$comentario->post->id}}"> {{$comentario->post->title}}</a></td>
                            <td>{{$comentario->body}}</td>
                          </tr>
                        @endforeach
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
  <script src="/js/jquery-1.11.1.js"></script>
  <!-- REQUIRED BOOTSTRAP SCRIPTS -->
  <script src="/js/bootstrap.js"></script>

@endsection
