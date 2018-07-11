<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title', 'HoneyCode')</title>

    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/modern-business.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/master.css">
    <script src="/js/jsquery-3.3.1.min.js" charset="utf-8"></script>



  </head>

  <body >
    @if (Auth::check())
      @include('layouts.navcheck')
    @else
      @include('layouts.nav')
    @endif
    @yield('content')
    @include('layouts.footer')

    @yield('meta')
  </body>

</html>
