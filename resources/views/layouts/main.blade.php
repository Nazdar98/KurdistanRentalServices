<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title') - Kurdistan Rental Services</title>

  <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="/img/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/img/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/img/apple-touch-icon-114x114.png">

  <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="/fonts/font-awesome/css/font-awesome.css">

  <link rel="stylesheet" type="text/css" href="/css/style.css">
  <link rel="stylesheet" type="text/css" href="/css/nivo-lightbox/nivo-lightbox.css">
  <link rel="stylesheet" type="text/css" href="/css/nivo-lightbox/default.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
  <!-- Navigation -->
  <nav id="menu" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand page-scroll" href="/">Kurdistan Rental Services</a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="/" class="page-scroll">Home</a></li>
          <li><a href="/rentals" class="page-scroll">Rentals</a></li>
          <li><a href="/about" class="page-scroll">About</a></li>
          <li><a href="/contact" class="page-scroll">Contact</a></li>

          <!-- Authentication Links -->
          <li>
            @if (Route::has('login'))
            @auth
            <a href="#" class="text-sm text-gray-700 dark:text-gray-500 underline">{{ Auth::user()->name }}</a>
            @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
          </li>
          <li>
            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            @endif
            @endauth
            @endif
          </li>
          <li>
            @if (Route::has('login'))
            @auth
            <a class="" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
            @endauth
            @endif
          </li>
        </ul>
      </div>

    </div>
  </nav>

  @yield('content')

  <!-- Footer Section -->
  <div id="footer">
    <div class="container text-center">
      <p>&copy; <?php echo date("Y"); ?> <a href="/">Kurdistan Rental Services</a></p>
    </div>
  </div>

  <script type="text/javascript" src="/js/jquery.1.11.1.js"></script>
  <script type="text/javascript" src="/js/bootstrap.js"></script>
  <script type="text/javascript" src="/js/SmoothScroll.js"></script>
  <script type="text/javascript" src="/js/nivo-lightbox.js"></script>
  <script type="text/javascript" src="/js/jqBootstrapValidation.js"></script>
  <script type="text/javascript" src="/js/main.js"></script>
</body>

</html>