@extends('layouts.plantilla2')

@section('content')

  
<header class="cabezera">
  <div class="perfil">
    <img class="perfil-foto" src="{{asset('img/nopal.jpg')}}"/>
  </div>


  <div class="titulo">
   <h3>Nombre de usuario</h3>
    <h3>Correo del usuario</h3>
  </div>


  <div class="col"></div>
  <div class="tema">
    <button class="btnPerfil" onclick="mudaTema()">Alterar Tema</button>
  </div>
</header>


<main class="jumpotron">
  <ul class="jumpotron-titulo">Calificaciones de los cursos en Nahualt:</ul>

</main>
</div>
@endsection