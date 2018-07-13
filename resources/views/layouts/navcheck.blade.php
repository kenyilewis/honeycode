<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top navhead">
  <div class="container">
    <a class="navbar-brand" href="/"> <img src="/images/logo.png" alt="logo" width="80px"> </a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="/user/{{auth()->user()->user}}">PROFILE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/post">POSTS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/faq">FAQ</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{auth()->user()->user}}</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="/mensajes">MENSAJES</a>
            <a class="dropdown-item" href="/amigos">AMIGOS</a>
            <a class="dropdown-item" href="/logout">LOGOUT</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
