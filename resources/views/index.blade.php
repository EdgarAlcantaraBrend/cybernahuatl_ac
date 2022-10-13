@extends('layouts.plantilla')

@section('content')
<p></p>
<!--Contendedor--->
<div class="container-fluid">
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card">
          <span style="font-family: 'Alata', sans-serif"><strong><h1 class="text-center" style="color:rgb(28, 52, 45) ">En CyberNahualt encontraras cursos para toda la famila acerca 
            del idioma Nahualt
          </h1></strong></span>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Contenedor de carrusel--->
<div class="container" style="margin-top: 80px">
  <div class="row">
    
    <div class="col-sm-8"><div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" >
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" style="border-block-color: orange">
        <div class="carousel-item active">
          <img src="{{asset('img/articulos.jpg')}}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <!--<h5>First slide label</h5>
            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>-->
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{asset('img/frijoles.jpg')}}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <!---<h5>Second slide label</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{asset('img/nopal.jpg')}}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <!---<h5>Third slide label</h5>
            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>-->
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div></div>
    <br>
    <br>
    <p></p>
    <div class="col-sm-1">
      <div class="row"><div class="col"><img src="{{asset('img/aprendiendo_online3.jpg')}}" alt="" style="width:320px ;height:225px"></div></div>
      <p></p>
      <div class="row"><div class="col"><img src="{{asset('img/aprendiendo_online.jpg')}}" alt="" style="width:320px ;height:225px"></div></div>
    </div>
    <div class="col-sm-2"></div>
  </div>
</div>
<p></p>

<div class="container-fluid">
  <div class="row">
    <div class="col">
      <div class="card" style="border: none">
        <div class="card" style="border: none">
          <span style="font-family: 'Alata', sans-serif"><strong><h1 class="text-center" style="color:rgb(28, 52, 45) ">¡Cursos que pueden ser de tu interes!
          </h1></strong></span>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Contenedor de cards--->
<div class="container-fluid:100%" style="margin-top: 20px">
  
  <section id="services">
    <div class="container-fluid">
        
        <div class="row space-rows" id="animated-cards">
            <div class="col-sm-3">
                <div class="card cards-shadown cards-hover">
                    <div class="card-header"><span class="space"><i class="fab fa-angular service-icon" id="service-icon-1"></i></span>
                        <div class="cardheader-text">
                          <p></p>
                            <h4 id="heading-card-1" class="heading-card">Grafías Nahualt</h4>
                            <!---<p id="cardheader-subtext-1" class="cardheader-subtext">(Alfabeto Nahuatl)</p>-->
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text sub-text-color"> Descripción:</p>
                        <p class="card-text cardbody-sub-text">El alfabeto practico consiste en 19 grafías para 19 fonemas propios del náhuatl.<br /><br />
                          <div class="row"><div class="col-sm-5"><a href="{{ route('login')}}"><span class="btn" style="background-color: #1c342d;color:white">Ver más</span></a></div></div>
                          <br /></p>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-3">
                <div class="card cards-shadown cards-hover">
                    <div class="card-header"><span class="space"><i class="fab fa-windows service-icon" id="service-icon-2"></i></span>
                        <div class="cardheader-text">
                        <p></p>
                            <h4 id="heading-card-2" class="heading-card" style="justify-content: center">Partes del cuerpo</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text sub-text-color"> Descripción:</p>
                        <p class="card-text cardbody-sub-text">Este curso consiste en aprender los nombres en Nahuatl sobre las partes del cuerpo<br /><br />
                          <div class="row"><div class="col-sm-5"><a href="{{ route('login')}}"><span class="btn" style="background-color: #1c342d;color:white">Ver más</span></a></div></div>
                          <br /></p>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-3">
                <div class="card cards-shadown cards-hover">
                    <div class="card-header cards-header-hover"><span class="space"><i class="fab fa-java service-icon" id="service-icon-3"></i></span>
                        <div class="cardheader-text">
                            <p></p>
                            <h4 id="heading-card-3" class="heading-card">Numeración Nahuatl</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text sub-text-color"> Descripción:</p>
                        <p class="card-text cardbody-sub-text">El objetivo de este curso consiste en aprender los numeros en lengua Nahuatl<br /><br />
                          <div class="row"><div class="col-sm-5"><a href="{{ route('login')}}"><span class="btn" style="background-color: #1c342d;color:white">Ver más</span></a></div></div>
                          <br /></p>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-3">
              <div class="card cards-shadown cards-hover">
                  <div class="card-header cards-header-hover"><span class="space"><i class="fab fa-java service-icon" id="service-icon-3"></i></span>
                      <div class="cardheader-text">
                        <p></p>
                          <h4 id="heading-card-3" class="heading-card">Diccionario Nahuatl</h4>
                      </div>
                  </div>
                  <div class="card-body">
                      <p class="card-text sub-text-color"> Descripción:</p>
                      <p class="card-text cardbody-sub-text">En esta sección pódras encontrar información de palabras de como se escriben y se pronuncian en el lenguaje Nahuatl
                        <br />
                          <div class="row"><div class="col-sm-5"><a href="{{ route('login')}}"><span class="btn" style="background-color: #1c342d;color:white">Ver más</span></a></div></div>
                          <br />
                      </p>
                  </div>
              </div>
          </div>
        </div>
    </div>
</section>
</div>
<!-- Contenedor de 3 img--->
<div class="container">
  <div class="row">
   
    <div class="col-sm-8"><iframe width="100%" height="100%" src="https://www.youtube.com/embed/rJ6jqZXPnAM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
    <p></p>
    <div class="col-sm-3">
      <div class="row">
        <div class="col"><img src="{{asset('img/señores2.jpg')}}" alt="" style="width:320px ;height:225px"></div>
      </div>
        <p></p>
       <div class="row">
        <div class="col"><img src="{{asset('img/tractor.jpg')}}" alt="" style="width:320px ;height:225px"></div>
       </div>
      </div>
    </div>
    
  
</div>
<br><br><br>

        
    
  
@endsection