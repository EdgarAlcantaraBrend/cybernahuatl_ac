
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	
	<title>Inicio</title>
  
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/perfil.css') }}">
    <title>Inicio</title>
  </head>
  
  <body>

    <div class="container-full">
  
      <!-- Nav -->
      <nav class="navbar navbar-inverse navbar-static-top" style="background-color: #712130" >
        <div class="container margin-left-nav">
          <div class="row">
            <div class="col-md-2" style="margin-left:-20px">
              <!-- Navbar brand (Brainiac) y botón colapsable -->
              <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                            </button>
                <a class="navbar-brand"  id="2" href="" style="color: #fff;margin-left: 50px">CYBERNAHUATL</a>
              </div>
            </div>
            
            <div class="col-md-10">
              <div class="navbar-collapse collapse" id="navbar-main" >
  
                <!-- Navbar botones -->
                <ul class="nav navbar-nav horizontal mar-left">
                  <li><a href="{{ route('welcome')}}" style="text-align: center;width: 150px;color:#fff">Inicio</a></li>
                  <li><a href="{{ route('abecedario')}}" style="text-align: center;width: 150px;color:#fff">Alfabeto</a></li>
                  <li><a href="contacto.html" style="text-align: center;width: 200px;color:#fff">Partes del cuerpo</a></li>
                  <li><a href="contacto.html" style="text-align: center;width: 150px;color:#fff">Numeración</a></li>
                  <li><a href="contacto.html" style="text-align: center;width: 150px;color:#fff">Contacto</a></li>
                </ul>
  
                <!-- Navbar derecho (Registro, Login) -->
                <ul class="nav navbar-nav navbar-right horizontal">
  
                    
                  <!-- Inicio de sesión -->
                  <li class="dropdown" >
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="sesion" style="color:#fff">Cerrar sesión </a>
                  </li>
                </ul>
              </div>
            </div>
  
  
          </div>
        </div>
      </nav>
    </div>
  
  
    <section class="container-full" >
      
      <!-- Main page -->
      <div class="row" id="full-page" >
  
        <!-- Sidebar -->
        <div class="col-md-2" >
          <div class="profile-sidebar" style="background-color: #1c342d"">
  
            <!-- User picture -->
            <div class="profile-userpic">
              <img src="{{asset('img/logoCyber.png')}}" class="img-responsive img-circle border" alt="foto">
            </div>
  
           
            <!-- Sidebar menu -->
            <nav class="profile-menu" >
              <ul class="nav navbar vertical">
                <li>
                  <a href="{{ route('perfil')}}" style="color: #fff"><i class="glyphicon glyphicon-user" style="color: #fff"></i> Perfil</a>
                </li>
                <li>
                  <a href="{{ route('cursos')}}" style="color: #fff"><i class=" fas fa fa-regular fa-graduation-cap" style="color: #fff"></i>Cursos</a>
                </li>
                <li>
                  <a href="#" style="color: #fff"><i class="glyphicon glyphicon-star" style="color: #fff"></i>Profesores</a>
                </li>
                <li>
                  <a href="#" style="color: #fff"><i class="glyphicon glyphicon-flag" style="color: #fff"></i> Ayuda</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
    <!-- Bootstrap CSS -->
   

 
   
      <br><br><br>
      <div class="cont">
        <br><br><br>
        <div><img class="img-perfil" src="https://d500.epimg.net/cincodias/imagenes/2016/07/04/lifestyle/1467646262_522853_1467646344_noticia_normal.jpg"/></div>
          <p></p>
          <h1 style="margin-right: 150px;color:black">Perfil de usuario</h1>
          <h2 style="margin-right: 150px;color:black">Profesion</h2>
          <p style="margin-right: 150px;"><a href="mailto:">example@domain.com</a></p>
          <p style="margin-right: 150px;"><a href="http://www.facebook.com" target="_blank"></a></p>
        </div>
    
  </html>
<body>