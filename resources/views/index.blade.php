@extends('layouts.plantilla')

@section('content')

<!-- Page Wrap -->
<div class="page-wrap">

  <div id="home-slider">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide swiper-slide-one">
          <div class="swiper-image" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left swiper-image-one">
              <h1>A <span class="emphasis">Breath</span>. <br><span>Of Fresh Air.</span></h1>
              <p>Chapter I, page XV</p>
            </div>
          </div>
          <div class="swiper-image" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right swiper-image-two">
              <p class="paragraph">
                A Prophet sat in the market-place and told the fortunes of all who cared to engage his services. Suddenly there came running up one who told him that his house had been broken into by thieves, and that they had made off with everything they could lay
                hands on.
              </p>
            </div>
          </div>
        </div>
        <div class="swiper-slide swiper-slide-two">
          <div class="swiper-image" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left swiper-image-three">
              <h1>The <span class="emphasis">Drop</span>. <br><span>Of Eternal life.</span></h1>
              <p>Chapter II, page VII</p>
            </div>
          </div>
          <div class="swiper-image" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right swiper-image-four">
              <p class="paragraph">
                A thirsty Crow found a Pitcher with some water in it, but so little was there that, try as she might, she could not reach it with her beak, and it seemed as though she would die of thirst within sight of the remedy.
              </p>
            </div>
          </div>
        </div>
        <div class="swiper-slide swiper-slide-three">
          <div class="swiper-image" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left swiper-image-five">
              <h1>A <span class="emphasis">Sense</span>. <br><span>Of Things to Come.</span></h1>
              <p>Chapter III, page XI</p>
            </div>
          </div>
          <div class="swiper-image" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right swiper-image-six">
              <p class="paragraph">
                Every man carries Two Bags about with him, one in front and one behind, and both are packed full of faults. The Bag in front contains his neighbours’ faults, the one behind his own. Hence it is that men do not see their own faults, but never fail to see
                those of others.
              </p>
            </div>
          </div>
        </div>

      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>

</div>

	
<main>
  <section class="hero" >
    <div class="hero-txt">
      <p class="text-white">
        <h1 class="text-white">En CyberNahualt encontraras cursos para toda la famila acerca 
          del idioma Nahualt
        </h1>
      </p>
    </div>
  </section>
  
  <section class="aprendizaje mt-4" >
    <h2 class="title-c">¿Porqué te encantará aprender Nahualt?</h2>
    <div class="contenedor">
      <article class="card">
        <img src="" class="card-img-top" alt="..." height="180;" style="background-color: aqua">
        <div class="card-txt text-justify">
          <h6>En el náhuatl, en la lengua y en la cosmovisión, el ser humano no es el 
            centro, sino que es parte de un todo, como son los animales, las plantas, todos los seres vivos.
            Entonces cuando alguien aprende náhuatl, encuentra una oportunidad para resignificar su mundo y 
            su propia persona”</h6>
            <p class="card-text"><small class="text-muted">Sergio Sevilla</small></p>
        </div>
      </article>
      <article class="card">
        <img src="" class="card-img-top" alt="..." height="180;" style="background-color: aqua" >
        <div class="card-txt text-justify">
          <h6>Preservar las lenguas es indispensable ya que actualmente, al menos el 43% 
            de las 6000 lenguas que se estima que se hablan en el mundo están en  peligro de extinción y se
            calcula  que cada dos semanas desaparece una lengua que se lleva consigo todo un patrimonio 
            cultural e intelectual.</h6>
            <p class="card-text"><small class="text-muted">ONU</small></p>
        </div>
        
      </article>
      <article class="card">
        <img src="" class="card-img-top" alt="..." height="180;"  style="background-color: aqua">
        <div class="card-txt text-justify">
          <h6>Por el interes en aprender náhuatl porque cree que es muy importante que 
            en México las personas puedan tener un acercamiento con las lenguas indígenas que dice, 
            deben ser motivo de orgullo.</h6>
            <p class="card-text"><small class="text-muted">Flor es estudiante de Letras Hispánicas</small></p>
        </div>
      </article>
    </div>
  </section>
  
  
</main>
<br><br>
<footer>
  
  <div class="redes">
    <h3>Seguinos en nuestras redes</h3>
    <ul>
      <li>FB</li>
      <li>IG</li>
      <li>TW</li>
    </ul>
  </div>
</footer>
        
    
  
@endsection