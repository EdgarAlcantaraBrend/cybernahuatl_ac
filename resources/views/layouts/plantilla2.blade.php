<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{asset('css/navbarSistema.css') }}" rel="stylesheet">
    <link href="{{asset('librerias/fontawesome/css/all.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="librerias/fontawesome/css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">  
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link href="{{asset('css/curso.css') }}" rel="stylesheet">
    <link href="{{asset('css/carrucelAlfabeto.css') }}" rel="stylesheet">
    <link href="{{asset('css/perfil.css') }}" rel="stylesheet">
    <link href="{{asset('css/profesores.css') }}" rel="stylesheet">
    <link href="{{asset('css/cuerpo.css') }}" rel="stylesheet">
    <link href="{{asset('css/numeracion.css') }}" rel="stylesheet">
    <link href="{{asset('css/diccionario.css') }}" rel="stylesheet">
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
            <div class="navbar-header ">
              
              
              <div class="row">
                <a href="#" class="navbar-brand" id="sidebar-toggle"><i class="fa fa-bars"></i></a>
                <div class="col"><a href="{{ route('abecedario')}}">Alfabeto</a></div>
                <div class="col"><a href="{{ route('numeracion')}}">Numeraciòn</a></div>
                <div class="col"><a href="{{ route('cuerpo')}}">Cuerpo</a></div>
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
    <script src="https://rawcdn.githack.com/bramus/scroll-timeline/b59ed75508d7341f97dc25eccf20ab66231c815a/dist/scroll-timeline.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{ asset('js/navbarSistema.js') }}"></script>
    <script src="{{ asset('js/carrucelAlfabeto.js') }}"></script>
    <script src="{{ asset('js/diccionario.js') }}"></script>
    <script src="{{ asset('js/perfil.js') }}"></script>
    <script src="{{ asset('js/numeracion.js') }}"></script>
  </body>
</html>
