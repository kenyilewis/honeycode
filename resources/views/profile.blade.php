@extends('master')

@section('content')
  <div class="container">
      <section style="padding-bottom: 50px; padding-top: 50px;">
          <div class="row">
              <div class="col-md-4">
                  <img src="images/default.jpg" class="rounded-circle img-responsive" width="250px" height="250px" />
                  <br />
                  <br />
                  @if ($usuario->id == auth()->user()->id)
                  <form class="" action="index.html" method="post">
                  <label>Registered user</label>
                  <input id="user" type="text" class="form-control" placeholder="{{$usuario->user}} " disabled>
                  <label>Registered Name</label>
                  <input id="name" type="text" class="form-control" placeholder="{{$usuario->name}}" disabled>
                  <label>Registered Email</label>
                  <input type="text" class="form-control" placeholder="{{$usuario->email}}" disabled>
                  <br>
                  <button type="submit" id="act" class="btn btn-danger" style="display:none">Actualizar</button>
                  <a class="btn btn-success" id="actualizar">Actualizar datos</a>
                  <br /><br/>
                  </form>
                  @else
                    <ul>
                      <li>{{$usuario->user}}</li>
                      <li>{{$usuario->name}}</li>
                      <li>{{$usuario->email}}</li>
                    </ul>
                @endif
              </div>
              <div class="col-md-8">
                  @if ($usuario->id == auth()->user()->id)
                    <div class="alert alert-info">
                        <h2>Biografia : </h2>
                        <h4>Hola {{$usuario->name}}</h4>
                        <p>
                            Bienvenido a HONEYCODE. Por favor termina de completar tu perfil asi podes empezar a compartir tus conocimientos con los demas.
                        </p>
                    </div>
                  @endif

                  <div >
                      <a href="#" class="btn btn-social btn-facebook">
                          <i class="fab fa-facebook-f"></i>&nbsp; Facebook</a>
                      <a href="#" class="btn btn-social btn-google">
                          <i class="fab fa-google-plus-g"></i>&nbsp; Google</a>
                      <a href="#" class="btn btn-social btn-twitter">
                          <i class="fab fa-twitter"></i>&nbsp; Twitter </a>
                      <a href="#" class="btn btn-social btn-git">
                          <i class="fab fa-github"></i>&nbsp; Github </a>
                  </div>
                  <div class="form-group col-md-8">
                      <h3>Informacion Adicional</h3>
                      <br />
                      <form class="form-group" action="controllers/update.controller.php" method="post" enctype="multipart/form-data">
                        <input type="text" name="id" value=" ?>" hidden>

                      <label>Cargar Imagen de Perfil</label>
                      <input type="file" class="form-control">
                      <label>Conocimientos</label><br>
                      <input type="checkbox" name="vehicle" value="php"> PHP
                      <input type="checkbox" name="vehicle" value="html"> HTML<br>
                      <input type="checkbox" name="vehicle" value="css"> CSS<br>
                      <input type="checkbox" name="vehicle" value="js"> Javascript
                      <input type="checkbox" name="vehicle" value="java"> Java<br>
                      <input type="checkbox" name="vehicle" value="ruby"> Ruby<br>
                      <label>Perfil Facebook</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">  <i class="fab fa-facebook-f"></i>&nbsp;</div>
                        </div>
                        <input type="text" class="form-control" name="facebook" id="inlineFormInputGroupusuarioname" value="https://www.facebook.com/">
                      </div>
                      <label>Perfil Google +</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">  <i class="fab fa-google-plus-g"></i>&nbsp;</div>
                        </div>
                        <input type="text" class="form-control"  name="google" id="inlineFormInputGroupusuarioname" value="https://www.google.com/">
                      </div>
                      <label>Perfil Twitter</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text"><i class="fab fa-twitter"></i>&nbsp;</div>
                        </div>
                        <input type="text" class="form-control" name="twitter" id="inlineFormInputGroupusuarioname" value="https://twitter.com/">
                      </div>
                      <label>Perfil GitHub</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">  <i class="fab fa-github"></i>&nbsp;</div>
                        </div>
                        <input type="text" class="form-control" name="git" id="inlineFormInputGroupusuarioname" value="https://github.com/">
                      </div>
                      <br>
                     <button type="submit" class="btn btn-warning" name="button">Actualizar Informacion</button>
                    </form>
                  </div>
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
@section('meta')
  <script src="/js/profile.js"></script>
@endsection
