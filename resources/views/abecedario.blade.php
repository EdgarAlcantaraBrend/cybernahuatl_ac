@extends('layouts.plantilla2')

@section('content')
<div class="container">
  
  <h1> Place holders </h1>
  
  <div class="carousel">
    
    <div class="arrow" data-dir="-1"> 
      ⟻
    </div>
    <div class="arrow" data-dir="1"> 
      ⟼
    </div>
    
      <div class="card card-on-left"
           data-pos="1">
        <img
             src="https://picsum.photos/400"
             alt="Lorem Picsum"
             class="illustration"
             >
        <p class="name">
          <a href="https://picsum.photos">
            Lorem Picsum
          </a>
        </p>
      </div>
      <div class="card card-on-right"
           data-pos="2">
        <img
             src="https://via.placeholder.com/400"
             alt="place holder"
             class="illustration"
             >
        <p class="name">
          <a href="https://via.placeholder.com">
            place holder
          </a>
        </p>
      </div>
      <div class="card card-on-left"
           data-pos="3">
        <img
             src="https://www.placecage.com/400/400"
             alt="place Cage"
             class="illustration"
             >
        <p class="name">
          <a href="https://www.placecage.com">
            place Cage
          </a>
        </p>
      </div>
      <div class="card card-on-right"
           data-pos="4">
        <img
             src="https://placekitten.com/400/400"
             alt="place Kitten"
             class="illustration"
             >
        <p class="name">
          <a href="https://placekitten.com">
            Place Kitten
          </a>
        </p>
      </div>
      <div class="card card-on-left"
           data-pos="5">
        <img
             src="https://baconmockup.com/400/400"
             alt="baconmockup"
             class="illustration"
             >
        <p class="name">
          <a href="https://baconmockup.com">
            baconmockup
          </a>
        </p>
      </div>
            <div class="card card-on-right"
                 data-pos="6">
        <img
             src="https://placebeard.it/400x400"
             alt="place beard"
             class="illustration"
             >
        <p class="name">
          <a href="https://placebeard.it">
            place beard
          </a>
        </p>
      </div>
            <div class="card card-on-left"
             data-pos="7">
        <img
             src="http://placeimg.com/400/400/arch/grayscale"
             alt="place img"
             class="illustration"
             >
        <p class="name">
          <a href="http://placeimg.com">
            Place img
          </a>
        </p>
      </div>
            <div class="card card-on-right"
             data-pos="8">
              <img
             src="https://www.fillmurray.com/400/400"
             alt="fill Murray"
             class="illustration"
             >
        <p class="name">
          <a href="https://www.fillmurray.com">
            fill Murray
          </a>
        </p>        
      </div>
    </div>
</div>



  
  
  
@endsection