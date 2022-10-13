<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ibarra+Real+Nova&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <link href="{{asset('css/navbarInicio.css') }}" rel="stylesheet">
    <link href="{{asset('css/registro.css') }}" rel="stylesheet">
    <link href="{{asset('css/slider.css') }}" rel="stylesheet">
    <link href="{{asset('css/cards3.css') }}" rel="stylesheet">
  </head>
  <body>

	
	<header>
    
	<!-- Image and text -->
  <nav>
    <a class="navbar-brand" href="{{ route('index')}}">
      <img src="{{asset('img/logoCyber.png') }}" width="50" height="50"  alt="" loading="lazy">
      <span style="color: white; font-family: 'Alata', sans-serif;">CyberNahualt</span>
    </a>
  </nav>
		<nav>
      <a href="{{ route('login')}}"><span class="btn" style="background-color:#952f57; color:white; font-family: 'Alata', sans-serif;" >Ingresar</span></a>
      <a href="{{ route('auth.register')}}"><span class=" btn" style="background-color: #cd0c36; color:white; font-family: 'Alata', sans-serif;">Registrar</span></a>
		</nav>
	</header>
  



    @yield('content')


      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="{{ asset('js/navbar.js') }}"></script>

  </body>
</html>
