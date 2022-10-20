<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{asset('css/navbarSistema.css') }}" rel="stylesheet">
    <link href="{{asset('librerias/fontawesome/css/all.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="librerias/fontawesome/css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">  
    <link href="{{asset('css/carrucelAlfabeto.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link href="{{asset('css/curso.css') }}" rel="stylesheet">
    <link href="{{asset('css/perfil.css') }}" rel="stylesheet">
    <link href="{{asset('css/profesores.css') }}" rel="stylesheet">
  </head>
  <body>
    
    <div id="wrapper">

      <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
          <h2>CyberNahualt</h2>
        </div>
        <ul class="sidebar-nav mt-4">
          <li class="">
            <a href="#"><i class="fa fa-home"></i>Home</a>
          </li>
          <li>
            <a href="{{ route('cursos')}}"><i class="fa fa-university" aria-hidden="true"></i>Cursos</a>
          </li>
          <li>
            <a href="{{ route('diccionario')}}"><i class="fa fa-outdent"></i>Diccionario</a>
          </li>
          <hr>
          <li>
            <a href="{{ route('perfil')}}"><i class="fa fa-user"></i>Perfil</a>
          </li>
          <li>
            <a href="{{ route('profesores')}}"><i class="fa fa-users" aria-hidden="true"></i>Profesores</a>
          </li>
        </ul>
      </aside>
    
      <div id="navbar-wrapper">
        <nav class="navbar navbar-inverse  ">
          <div class="container-fluid">
            <div class="navbar-header  ">
              <a href="#" class="navbar-brand" id="sidebar-toggle"><i class="fa fa-bars"></i></a>
              <a href="{{ route('abecedario')}}">Alfabeto</a>
              <a href="">Numeraciòn</a>
              <a href="">Cuerpo</a>
              
            </div>
          </div>
        </nav>
      </div>
    
      <section id="content-wrapper">
          <div class="row">
            <div class="col-lg-12">
              @yield('content')
            </div>
          </div>
      </section>
    
    </div>
  <!--/.container-->


  <!--/.container-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('js/navbarSistema.js') }}"></script>
    <script src="{{ asset('js/carrucelAlfabeto.js') }}"></script>
    <script src="{{ asset('js/diccionario.js') }}"></script>
    <script src="{{ asset('js/perfil.js') }}"></script>
  </body>
</html>
