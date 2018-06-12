@extends('master')

@section('content')
  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('/images/programadores.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <?php if (!isset($_SESSION["login"])): ?>
              <a class="btn btn-lg btn-secondary  btn-success" href="register.php">REGISTRATE</a>
            <?php endif; ?>

            <h1 class="title-banner">Connecting people</h1>
            <h3 class="title-banner">Everywhere.</h3>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container main-page">

    <br><br><br>

    <!-- Marketing Icons Section -->


    <!-- Portfolio Section -->


    <div class="row">
      <div class=" col-md-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="/images/hackealo.png" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Encontra lo que necesitas</a>
            </h4>
            <p class="card-text">En HoneyCode busca a tu complemento para tus proyectos. ¿Necesitas a un profesional de algun lenguaje de programacion en particular? Encontralo aca. Una red social para conectarte con todos los programadores de la web. Arma tu grupo y empeza ese proyecto que siempre deseaste.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="/images/imagen.png" alt="" height="270px"></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">A tu disposicion</a>
            </h4>
            <p class="card-text">¿Estas trabado en tu proyecto? ¿Necesitas ayuda para salir de ese problema? En el foro podes compartir tus dudas y todos los usuarios van a estar dispuestos a ayudarte y compartir su conocimiento con vos. Solo necesitas registrarte y empezar a compartir tu sabiduria.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-sm-6 portfolio-item out">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Project Four</a>
            </h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item out">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Project Five</a>
            </h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item out">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Project Six</a>
            </h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque earum nostrum suscipit ducimus nihil provident, perferendis rem illo, voluptate atque, sit eius in voluptates, nemo repellat fugiat excepturi! Nemo, esse.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->

    <!-- Features Section -->
    <div class="row out">
      <div class="col-lg-6">
        <h2>Modern Business Features</h2>
        <p>The Modern Business template by Start Bootstrap includes:</p>
        <ul>
          <li>
            <strong>Bootstrap v4</strong>
          </li>
          <li>jQuery</li>
          <li>Font Awesome</li>
          <li>Working contact form with validation</li>
          <li>Unstyled page elements for easy customization</li>
        </ul>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
      </div>
      <div class="col-lg-6">
        <img class="img-fluid rounded" src="http://placehold.it/700x450" alt="">
      </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Call to Action Section -->

        <?php if (!isset($_SESSION["login"])): ?>
          <div class="row mb-4">
            <div class="col-md-8">
              <p>REGISTRATE E INGRESA A ESTE NUEVO MUNDO. UNA HERRAMIENTA PARA TUS PROYECTOS.</p>
            </div>
            <div class="col-md-4">
          <a class="btn btn-lg btn-secondary btn-block btn-success" href="register.php">REGISTRATE</a>
        </div>
      </div>
        <?php endif; ?>



  </div>
  <!-- /.container -->
@endsection
